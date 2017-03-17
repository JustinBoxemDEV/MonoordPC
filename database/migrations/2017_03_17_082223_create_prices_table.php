<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->increments('price_id');
            $table->integer('timeslot_id')->unsigned();
            $table->float('price');
            $table->timestamps();
        });
        
        Schema::table('prices', function (Blueprint $table)
        {
            
        $table->foreign('timeslot_id')->references('timeslot_id')->on('timeslots');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
