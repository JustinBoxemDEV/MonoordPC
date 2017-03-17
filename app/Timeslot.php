<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Price;

class Timeslot extends Model
{
    protected $fillable = [
        'timeslot_id', 'timeslot_name', 'begintime', 'endtime'
    ];
     
     public function price() {
        return $this->belongsTo(Price::class);
    }
}
