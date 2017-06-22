<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room_Type;
use App\Room_Prices;
use App\Temporary_Reservation;

class Room extends Model
{
    protected $fillable = [
        'id', 'room_type_id', 'room_name', 'rent_status',
    ];
     
    public function Room_Types() {
        return $this->hasMany(Room_Type::class, 'room_type_id', 'id');
    }
    
    public function Room_Prices() {
        return $this->hasMany(Room_Price::class, 'room_price_id', 'id');
    }
    
    public function Temporary_Reservation() {
        return $this->hasMany(Temporary_Reservation::class);
    }
}
