<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class User_Address extends Model
{
    protected $fillable = [
        'id', 'user_id', 'city_id', 'zip_code', 'street', 'housenumber', 'housenumber_extension',
    ];
    
    public function User() {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function City() {
        return $this->belongsTo(City::class, 'city_id');
    }
}
