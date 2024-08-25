<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $table = 'password_resets';
    protected $fillable = ['email', 'token', 'created_at'];
    public $timestamps = false;
    protected $primaryKey = 'email';
    public $incrementing = false; // Email is not an integer auto-incrementing key
    protected $keyType = 'string'; // Define the primary key type as string
}
