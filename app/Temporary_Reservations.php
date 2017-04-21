<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporary_Reservations extends Model
{
    protected $fillable = [
        'id', 'band_id', 'payment_method_id', 'room_id', 'temp_reservation_date', 'temp_delayed',
    ];
    
    public function User() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
