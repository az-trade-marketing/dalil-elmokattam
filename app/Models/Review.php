<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function store() {
        return $this->belongsTo(Store::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    protected $casts = [
        'id'=>'string',
    ];
}
