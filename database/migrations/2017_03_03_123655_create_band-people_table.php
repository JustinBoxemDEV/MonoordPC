<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bandpeople', function (Blueprint $table) {
            $table->increments('bp-bridge_id');
            $table->integer('person_id')->unsigned();
            $table->integer('band_id')->unsigned();
            $table->timestamps();
        });
        
        Schema::table('bandpeople', function (Blueprint $table)
        {
            
        $table->foreign('person_id')->references('person_id')->on('people');
        $table->foreign('band_id')->references('band_id')->on('bands');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bandpeople');
    }
}
