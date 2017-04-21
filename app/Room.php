<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room_Type;

class Room extends Model
{
    protected $fillable = [
        'id', 'room_type_id', 'room_name', 'rent_status',
    ];
     
    public function Room_Types() {
        return $this->hasMany(Room_Type::class);
    }
}
