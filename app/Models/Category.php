<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function stores() {
        return $this->hasMany(Store::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class,'category_tags');
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($category) {
            $category->stores()->each(function ($store) {
                $store->delete();
            });
            $category->tags()->detach();
        });
    }
}
