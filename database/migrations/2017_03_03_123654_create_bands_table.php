<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bands', function (Blueprint $table) {
            $table->increments('band_id');
            $table->string('name')->unique();
            $table->integer('person_id')->unsigned();
            $table->timestamps();
        });
        
        Schema::table('bands', function (Blueprint $table)
        {
            
        $table->foreign('person_id')->references('person_id')->on('bandpeople');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bands');
    }
}
