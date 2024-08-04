<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $fillable = ['name_en','name_ar','type'];
    public function subscriptions()
    {
        return $this->belongsToMany(Subscription::class,'feature_subscriptions');
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($feature) {

            $feature->subscriptions()->detach();
        });
    }
}
