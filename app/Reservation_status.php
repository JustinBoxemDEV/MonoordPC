<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reservation;

class Reservation_status extends Model
{
    protected $fillable = [
        'id', 'reservation_status_name', 'reservation_status_credit_cost',
    ];
    
    public function Reservation() {
        return $this->hasMany(Reservation::class);
    }
}
