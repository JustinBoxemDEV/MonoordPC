<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Band_User_Bridge;
use App\Temporary_Reservation;
use App\BandsTicketsBridge;

class Band extends Model
{
    protected $fillable = [
        'id', 'band_name', 'notes', 'band_credits', 'is_deleted',
    ];
     
    public function Band_User_Bridge() {
        return $this->hasMany(Band_User_Bridge::class);
    }
    
    public function Temporary_Reservation() {
        return $this->hasMany(Temporary_Reservation::class);
    }
    
    public function BandTicketsBridge() {
        return $this->hasMany(BandsTicketsBridge::class);
    }
    
}
