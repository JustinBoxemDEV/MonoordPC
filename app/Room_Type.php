<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;

class Room_Type extends Model
{
    protected $fillable = [
        'room_type_id', 'room_type', 'surface_area'
    ];
    
    public function Room() {
        return $this->belongsTo(Room::class);
    }
}
