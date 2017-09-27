<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentStatusRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_status_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id')->unsigned();
            $table->integer('rent_status_id')->unsigned();
            $table->timestamps();
        });
        
        Schema::table('rent_status_rooms', function (Blueprint $table)
        {
            $table->foreign('room_id')->references('id')->on('rooms');   
        });
        
        Schema::table('rent_status_rooms', function (Blueprint $table)
        {
            $table->foreign('rent_status_id')->references('id')->on('rent__statuses');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rent_status_rooms');
    }
}
