<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('invoice_id');
            $table->float('amount_paid');
            $table->float('amount_due');
            $table->string('notes');
            $table->integer('btw_id')->unsigned();
            $table->integer('line_id')->unsigned();
            $table->timestamps();
        });
        
        Schema::table('invoices', function (Blueprint $table)
        {
            
        $table->foreign('btw_id')->references('btw_id')->on('btw');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
