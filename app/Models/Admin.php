<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles, HasPermissions;
    protected $guard_name = 'admin';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'status',
        'photo',
        'lang',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relationship with ImportFile.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stores()
    {
        return $this->hasMany(Store::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }
}
