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
        return $this->belongsToMany(Tag::class);
    }
}
