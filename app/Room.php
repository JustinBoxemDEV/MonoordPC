<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room_Type;

class Room extends Model
{
    protected $fillable = [
        'room_id', 'room_type_id', 'room_name', 'eligble_for_reservation'
    ];
    
    public function Room_Type() {
        return $this->hasMany(Room_Type::class);
    }
}
