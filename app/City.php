<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'id', 'name',
    ];
    
    public function User_Addresses() {
        return $this->hasMany(User_Address::class);
    }
}
