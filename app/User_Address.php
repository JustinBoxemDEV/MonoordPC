<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class User_Address extends Model
{
    protected $fillable = [
        'id', 'user_id', 'zip_code', 'street', 'housenumber', 'housenumber_extension', 'city',
    ];
    
    public function User() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
