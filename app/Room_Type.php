<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;

class Room_Type extends Model
{
    protected $fillable = [
        'id', 'room_type_name', 'room_type_surface',
    ];
     
    public function Rooms() {
        return $this->hasMany(Room::class);
    }
}
