<?php

namespace App\ModelApi;

use App\ModelApi\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    protected $appends = ['name'];
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_tags');
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
