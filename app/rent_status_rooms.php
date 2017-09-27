<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rent_status_rooms extends Model
{
    protected $fillable = [
        'id', 'room_id', 'rent_status_id',
    ];
    
    public function Rent_Status_Rooms() {
        return $this->hasMany(Invoice::class);
    }
}
