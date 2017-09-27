<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent_Status extends Model
{
    protected $fillable = [
        'id', 'room_rent_status_id', 'time',
    ];
    
    public function Rent_Statuses() {
        return $this->hasMany(Invoice::class);
    }
}
