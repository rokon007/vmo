<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable implements CanResetPassword
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     // function UserData()
     // {
     //    return $this->hsaMany('App\Models\business_profile');
     // }


    protected $fillable = [
           'id',
           'password',
           'last_login',
           'is_superuser',
           'groups',
           'user_permissions',
           'username',
           'first_name',
           'last_name',
           'email',
           'is_staff',
           'is_active',
           'date_joined',
           'company_name',
           'country',
           'city',
           'block',
           'contact',
           'level',
           'created_at',
           'updated_at',
            'facebook_id'

    ];

    /**
    
     * The attributes that should be hidden for serialization.
     *  'remember_token',
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
