<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpningTime extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getStartTimeAttribute()
    {
        $time = \DateTime::createFromFormat('H:i:s', $this->attributes['start_time']);
        $formattedStartTime = $time->format('h:i A');
        return $formattedStartTime;
    }
    public function getEndTimeAttribute()
    {
        $time = \DateTime::createFromFormat('H:i:s', $this->attributes['end_time']);
        $formattedEndTime = $time->format('h:i A');
        return $formattedEndTime;
    }
}
