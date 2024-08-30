<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\Traits\JWTSubject as JWTSubjectTrait;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles , HasPermissions  ;


    protected $fillable = [
        'email',
        'password',
        'firstname',
        'lastname',
        'phone',
        'gender',
        'photo',
        'date_of_birth',
        'lat',
        'lon',
        'device_token'
    ];

    protected $hidden = [
        'password',
    ];

  public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
    // public function notifiable()
    // {
    //     return $this->morphMany(ManualNotification::class,'notifiable');
    // }
    protected $casts = [
        'otp'=>'integer',
        'status'=>'integer',
    ];
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function favorits()
    {
        return $this->hasMany(Favorite::class);
    }
}


