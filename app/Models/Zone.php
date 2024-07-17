<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\Casts\PolygonCast;
use MatanYadaev\EloquentSpatial\Objects\Polygon;

class Zone extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $casts = [
        'coordinates' => Polygon::class,
    ];
}
