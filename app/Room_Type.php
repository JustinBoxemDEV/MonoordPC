<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;
use App\TicketStrips;

class Room_Type extends Model
{
    protected $fillable = [
        'id', 'room_type_name', 'room_type_surface',
    ];
     
    public function Rooms() {
        return $this->hasMany(Room::class);
    }
    
    public function Ticket_Strips() {
        return $this->hasMany(Ticket_Strips::class);
    }
}
