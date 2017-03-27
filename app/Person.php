<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\BandPerson;

class Person extends Model
{
     protected $fillable = [
        'person_id', 'initials', 'surname', 'password' ,'email', 'is_verified'
    ];
     
     /**public function bandPerson() {
        return $this->hasMany(BandPerson::class);
    }**/
}
