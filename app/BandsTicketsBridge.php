<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Band;
use App\TicketStrips;

class BandsTicketsBridge extends Model
{
    protected $fillable = [
        'id', 'band_id', 'ticket_strip_id', 'credits',
    ];
    
    public function Band() {
        return $this->belongsTo(Band::class, 'band_id');
    }
    
    public function TicketStrips() {
        return $this->belongsTo(TicketStrips::class, 'ticket_strip_id');
    }
}
