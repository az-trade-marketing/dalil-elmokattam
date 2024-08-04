<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function stores() {
        return $this->hasMany(Store::class);
    }
    public function features() {
        return $this->belongsToMany(Feature::class,'feature_subscriptions');
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($sub) {

            $sub->features()->detach();
        });
    }
}
