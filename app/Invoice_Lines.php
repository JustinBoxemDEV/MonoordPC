<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invoice;

class Invoice_Lines extends Model
{
    protected $fillable = [
        'id', 'invoice_id', 'price_ex_vat', 'invoice_line_description',
    ];
    
    public function Invoice() {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }
}
