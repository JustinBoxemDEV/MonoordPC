<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invoice;

class Price extends Model
{
    protected $fillable = [
        'id', 'price_value', 'price_daypart',
    ];
    
    public function Invoices() {
        return $this->hasMany(Invoice::class);
    }
}
