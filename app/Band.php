<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Band_User_Bridge;
use App\Temporary_Reservation;

class Band extends Model
{
    protected $fillable = [
        'id', 'band_name', 'band_credits', 'is_deleted',
    ];
     
    public function Band_User_Bridge() {
        return $this->hasMany(Band_User_Bridge::class);
    }
    
    public function Temporary_Reservation() {
        return $this->hasMany(Temporary_Reservation::class);
    }
    
}
