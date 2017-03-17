<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
      protected $fillable = [
        'invoice_id', 'btw_id'
    ];
      
      public function btw() {
        return $this->hasMany(Btw::class);
    }
}
