<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Band;

class Band_User_Bridge extends Model
{
    protected $fillable = [
        'id', 'band_id', 'user_id',
    ];
    
    public function Band() {
        return $this->belongsTo(Band::class, 'band_id');
    }
    
    public function User() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
