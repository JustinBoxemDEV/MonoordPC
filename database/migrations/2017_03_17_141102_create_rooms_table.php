<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('room_id');
            $table->integer('room_type_id')->unsigned();
            $table->string('room_name');
            $table->boolean('eligble_for_reservation');
            $table->timestamps();
        });
        
        Schema::table('rooms', function (Blueprint $table)
        {
            
        $table->foreign('room_type_id')->references('room_type_id')->on('room_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
