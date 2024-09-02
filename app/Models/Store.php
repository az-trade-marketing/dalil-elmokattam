<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function zones() {
        return $this->belongsTo(Zone::class,'zone_id');
    }
    public function admin() {
        return $this->belongsTo(Admin::class);
    }

    public function gallaries() {
        return $this->hasMany(GallaryStore::class);
    }
    public function reviews() {
        return $this->hasMany(Review::class);
    }
    public function favorites() {
        return $this->hasMany(Favorite::class);
    }
    public function reports() {
        return $this->hasMany(Report::class);
    }
    public function openingTimes() {
        return $this->hasMany(OpningTime::class);
    }
    public function subscription() {
        return $this->belongsTo(Subscription::class);
    }
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($store) {
            $store->gallaries()->each(function ($gallary) {
                $gallary->delete();
            });
            // Delete all related reviews
            $store->reviews()->each(function ($review) {
                $review->delete();
            });
            // Delete all related favorites
            $store->favorites()->each(function ($favorite) {
                $favorite->delete();
            });
            // Delete all related reports
            $store->reports()->each(function ($report) {
                $report->delete();
            });
        });
    }
    public function scopeRecentlyAdded($query)
    {
        return $query->where('created_at', '>=', Carbon::now()->subWeek());
    }
    public function tags() {
        return $this->belongsToMany(Tag::class,'store_tags');
    }
}
