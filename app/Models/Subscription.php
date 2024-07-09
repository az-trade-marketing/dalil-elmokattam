<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $guarde = [];
    public function stores() {
        return $this->hasMany(Store::class);
    }
    public function features() {
        return $this->belongsToMany(Feature::class);
    }
}
