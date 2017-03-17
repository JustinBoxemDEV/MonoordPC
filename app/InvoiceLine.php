<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceLine extends Model
{
      protected $fillable = [
        'line_id', 'description'
    ];
      
      public function invoiceLine() {
        return $this->belongsTo(Invoice::class);
    } //
}
