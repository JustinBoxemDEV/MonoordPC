<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Temporary_Reservation;
use App\Payment_Method;
use App\Room;
use App\Reservation_Status;

class Reservation extends Model
{
    protected $fillable = [
        'id', 'temporary_reservations_id', 'payment_method_id', 'room_id', 'reservation_status_id', 'reservation_time_start', 'reservation_time_end', 'notes', 'delayed', 
    ];
    
    public function Temporary_Reservation() {
        return $this->belongsTo(Temporary_Reservation::class, 'temporary_reservations_id');
    }
    
    public function Payment_Method() {
        return $this->belongsTo(Payment_Method::class, 'payment_method_id');
    }
    
    public function Room() {
        return $this->belongsTo(Room::class, 'room_id');
    }
    
    public function Reservation_Status() {
        return $this->belongsTo(Reservation_Status::class, 'reservation_status_id');
    }
}
