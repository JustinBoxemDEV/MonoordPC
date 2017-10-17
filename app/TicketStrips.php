<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BandsTicketsBridge;

class TicketStrips extends Model
{
    public $table = 'BandsTicketsBridges';
    
    protected $fillable = [
        'id', 'room_type_id', 'three_hour', 'filled', 'daytime',
    ];
    
    public function Room_Types() {
        return $this->hasMany(Room_Type::class, 'room_type_id', 'id');
    }
    
    public function BandTicketsBridge() {
        return $this->hasMany(BandsTicketsBridge::class);
    }
}
