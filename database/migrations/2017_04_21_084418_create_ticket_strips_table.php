<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketStripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_strips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_type_id')->unsigned();            
            $table->boolean('three_hour');
            $table->boolean('filled');
            $table->boolean('daytime')->default(0);
            $table->timestamps();
        });
        
        Schema::table('ticket_strips', function (Blueprint $table)
        {
            $table->foreign('room_type_id')->references('id')->on('room_types');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_strips');
    }
}
