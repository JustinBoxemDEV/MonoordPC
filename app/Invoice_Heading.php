<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invoice;

class Invoice_Heading extends Model
{
    protected $fillable = [
        'id', 'invoice_heading_description',
    ];
     
    public function Invoices() {
        return $this->hasMany(Invoice::class);
    }
}
