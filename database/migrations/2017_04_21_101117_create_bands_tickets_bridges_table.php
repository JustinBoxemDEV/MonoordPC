<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandsTicketsBridgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bands_tickets_bridges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('band_id')->unsigned();
            $table->integer('ticket_strip_id')->unsigned();
            $table->integer('credits')->default(0);
            $table->timestamps();
        });
        
        Schema::table('bands_tickets_bridges', function (Blueprint $table)
        {
            $table->foreign('band_id')->references('id')->on('bands');   
        });
        
        Schema::table('bands_tickets_bridges', function (Blueprint $table)
        {
            $table->foreign('ticket_strip_id')->references('id')->on('ticket_strips');   
        });
    }    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bands_tickets_bridges');
    }
}
