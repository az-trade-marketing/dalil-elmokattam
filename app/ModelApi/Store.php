<?php

namespace App\ModelApi;

use Carbon\Carbon;
use App\Models\Admin;
use App\Models\Report;
use App\Models\Review;
use App\Models\Favorite;
use App\Models\GallaryStore;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['name'];
    public function category() {
        return $this->belongsTo(Category::class);
    }
    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class, 'category_tags', 'store_id', 'tag_id');
    // }
    // public function tags()
    // {
    //     return $this->hasManyThrough(Tag::class, 'category_tags', 'store_id', 'id', 'id', 'tag_id');
    // }


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
    public function subscription() {
        return $this->belongsTo(Subscription::class);
    }

    public function  getNameAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->name_ar;
        } else {
            return $this->name_en;
        }
    }
    public function scopeRecentlyAdded($query)
    {
        return $query->where('created_at', '>=', Carbon::now()->subWeek());
    }
}
