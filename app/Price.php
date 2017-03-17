<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Timeslot;

class Price extends Model
{
    protected $fillable = [
        'price_id', 'timeslot_id', 'price'
    ];
    
    public function timeslot() {
        return $this->hasMany(Timeslot::class);
    }
}
