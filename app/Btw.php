<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Btw extends Model
{
     protected $fillable = [
        'btw_id', 'percentage'
    ];
    
     public function invoice() {
        return $this->belongsTo(Invoice::class);
    }
}
