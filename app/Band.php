<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BandPerson;

class Band extends Model
{
      protected $fillable = [
        'band_id', 'name', 'person_id'
    ];
      
      public function bandPerson() {
        return $this->hasMany(BandPerson::class);
    }
}
