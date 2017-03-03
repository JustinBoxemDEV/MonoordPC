<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Person;
use App\Band;

class BandPerson extends Model
{
    protected $fillable = [
        'bp-bridge_id', 'person_id', 'band_id'
    ];
     
     public function band() {
        return $this->belongsTo(Band::class);
    }
    
    public function person() {
        return $this->belongsTo(Person::class);
    }
}
