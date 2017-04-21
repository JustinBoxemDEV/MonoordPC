<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User_Address;
use App\Band_User_Bridge;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'firstname', 'lastname', 'is_admin', 'is_verified', 'verification_code',
    ];
    
    public function User_Addresses() {
        return $this->hasMany(User_Address::class);
    }

    public function Band_User_Bridge() {
        return $this->hasMany(Band_User_Bridge::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array x
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
