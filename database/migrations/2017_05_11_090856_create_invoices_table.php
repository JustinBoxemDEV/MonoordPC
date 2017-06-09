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
            $table->increments('id');
            $table->integer('price_id')->unsigned();
            $table->integer('vat_id')->unsigned();
            $table->integer('reservation_id')->unsigned();
            $table->integer('invoice_heading_id')->unsigned();
            $table->integer('invoice_number');
            $table->date('invoice_date');
            $table->integer('invoice_weeknumber');
            $table->string('invoice_description');
            $table->boolean('paid')->default(0);
            $table->timestamps();
        });
        
        Schema::table('invoices', function (Blueprint $table)
        {
            $table->foreign('price_id')->references('id')->on('prices');  
            $table->foreign('vat_id')->references('id')->on('vats');
            $table->foreign('reservation_id')->references('id')->on('reservations');
            $table->foreign('invoice_heading_id')->references('id')->on('invoice__headings');
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
