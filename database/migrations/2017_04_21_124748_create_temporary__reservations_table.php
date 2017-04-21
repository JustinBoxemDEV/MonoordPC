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
            $table->datetime('temp_reservation_date');
            $table->boolean('temp_delayed');
            $table->timestamps();
        });
        
        Schema::table('', function (Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users');   
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
