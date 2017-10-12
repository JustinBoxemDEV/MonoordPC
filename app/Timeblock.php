<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeblock extends Model
{
    protected $fillable = [
        'id', 'timeblock_name', 'timeblock_start', 'timeblock_end',
    ];
}
