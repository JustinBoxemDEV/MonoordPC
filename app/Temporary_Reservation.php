<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Band;
use App\Payment_Method;
use App\Room;
use App\Reservation;

class Temporary_Reservations extends Model
{
    protected $fillable = [
        'id', 'band_id', 'payment_method_id', 'room_id', 'temp_reservation_time_start', 'temp_reservation_time_end', 'temp_delayed', 'processed',
    ];
    
    public function Band() {
        return $this->belongsTo(Band::class, 'band_id');
    }
    
    public function Payment_method() {
        return $this->belongsTo(Payment_Method::class, 'payment_method_id');
    }
    
    public function Room() {
        return $this->belongsTo(Room::class, 'room_id');
    }
    
    public function Reservation() {
        return $this->hasMany(Reservation::class);
    }
}
