<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation_Type extends Model
{
     protected $fillable = [
        'reservation_type_id', 'status'
    ];
}
