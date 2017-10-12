<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invoice;

class VAT extends Model
{
    protected $fillable = [
        'id', 'vat_value', 'vat_activation_date',
    ];
    
    public function Invoices() {
        return $this->hasMany(Invoice::class);
    }
}
