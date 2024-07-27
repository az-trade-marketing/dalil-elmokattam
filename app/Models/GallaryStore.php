<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GallaryStore extends Model
{
    use HasFactory;
    protected $fillable = ['store_id', 'image'];

    protected $table = 'gallary_stores'; //
}
