<?php

namespace App;
use App\Room;

use Illuminate\Database\Eloquent\Model;

class Room_Prices extends Model
{
    protected $fillable = [
        'id', 'room_id', 'per_two', 'per_three', 'per_two_plus', 'per_three_plus', 'five_ticket', 'ten_ticket', 'daypart',
    ];
    
    public function Rooms() {
        return $this->hasMany(Room::class);
    }
}
