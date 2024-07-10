<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $guarde = [];
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function area() {
        return $this->belongsTo(Area::class);
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
}
