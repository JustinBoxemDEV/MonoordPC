<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quantity_Discount extends Model
{
    protected $fillable = [
        'id', 'quantity_discount_percentage',
    ];
}
