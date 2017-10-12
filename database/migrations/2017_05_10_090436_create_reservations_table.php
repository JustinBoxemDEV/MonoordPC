<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('temporary_reservations_id')->unsigned();
            $table->integer('payment_method_id')->unsigned();
            $table->integer('room_id')->unsigned();
            $table->integer('reservation_status_id')->unsigned();
            $table->datetime('reservation_time_start');
            $table->datetime('reservation_time_end');
            $table->boolean('delayed');
            $table->timestamps();
        });
        
        Schema::table('reservations', function (Blueprint $table)
        {
            $table->foreign('temporary_reservations_id')->references('id')->on('temporary__reservations');  
            $table->foreign('payment_method_id')->references('id')->on('payment__methods');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('reservation_status_id')->references('id')->on('reservation_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
