<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemporaryReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary__reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('band_id')->unsigned();
            $table->integer('payment_method_id')->unsigned();
            $table->integer('room_id')->unsigned();
            $table->datetime('temp_reservation_time_start');
            $table->datetime('temp_reservation_time_end');
            $table->string('notes')->nullable();
            $table->boolean('temp_delayed');
            $table->boolean('processed');
            $table->timestamps();
        });
        
        Schema::table('temporary__reservations', function (Blueprint $table)
        {
            $table->foreign('band_id')->references('id')->on('bands');  
            $table->foreign('payment_method_id')->references('id')->on('payment__methods');
            $table->foreign('room_id')->references('id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporary__reservations');
    }
}
