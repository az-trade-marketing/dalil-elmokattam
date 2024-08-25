<?php

namespace App\ModelApi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\Casts\PolygonCast;
use MatanYadaev\EloquentSpatial\Objects\Polygon;

class Zone extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['name'];
    protected $casts = [
        'coordinates' => Polygon::class,
    ];
    public function stores() {
        return $this->hasMany(Store::class);
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
