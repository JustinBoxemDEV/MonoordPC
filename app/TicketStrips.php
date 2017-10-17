<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketStrips extends Model
{
    protected $fillable = [
        'id', 'surface_area', 'three_hour', 'filled', 'daytime',
    ];
}
