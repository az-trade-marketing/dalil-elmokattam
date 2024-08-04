<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_tags');
    }
    //   protected static function boot()
    // {
    //     parent::boot();

    //     static::deleting(function ($tag) {
    //         $tag->categories()->detach(); // Detach all related categories before deleting the tag
    //     });
    // }
}
