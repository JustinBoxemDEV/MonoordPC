<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Band_User_Bridge;

class Band extends Model
{
    protected $fillable = [
        'id', 'band_name', 'band_credits',
    ];
     
    public function Band_User_Bridge() {
        return $this->hasMany(Band_User_Bridge::class);
    }
}
