<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Price;
use App\VAT;
use App\Reservation;
use App\Invoice_Heading;

class Invoice extends Model
{
    protected $fillable = [
        'id', 'price_id', 'vat_id', 'reservation_id', 'invoice_heading_id', 'invoice_number', 'invoice_date', 'invoice_date', 'invoice_weeknumber', 'invoice_description',
    ];
    
    public function Price() {
        return $this->belongsTo(Price::class, 'price_id');
    }
    
    public function VAT() {
        return $this->belongsTo(VAT::class, 'vat_id');
    }
    
    public function Reservation() {
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }
    
    public function Invoice_Heading() {
        return $this->belongsTo(Invoice_Heading::class, 'invoice_heading_id');
    }
    
    public function Invoice_line() {
        return $this->hasMany(Invoice_Line::class);
    }
    
}
