<?php

namespace App\ModelApi;

use App\Models\Tag;
use App\Models\Store;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['name'];

    public function stores() {
        return $this->hasMany(Store::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class,'category_tags');
    }
    public function  getNameAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->name_ar;
        } else {
            return $this->name_en;
        }
    }
}
