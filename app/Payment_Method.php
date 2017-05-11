<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Temporary_Reservation;

class Payment_Method extends Model
{
    protected $fillable = [
        'id', 'payment_method_name', 'ticketstrip_value',
    ];
    
    public function Temporary_Reservation() {
        return $this->hasMany(Temporary_Reservation::class);
    }
}
