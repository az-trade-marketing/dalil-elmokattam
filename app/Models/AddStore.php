<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class AddStore extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // إضافة التحويلات
    protected $casts = [
        'id' => 'string',
    ];
    public function zone() {
        return $this->belongsTo(Zone::class,'zone_id');
    }
}
