<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('person_id');
            $table->string('initials');
            $table->string('surname');
            $table->string('password');
            $table->boolean('is_verified');
            $table->integer('band_id')->unsigned();
            $table->timestamps();
        });
        
        Schema::table('people', function (Blueprint $table)
        {
            
        $table->foreign('band_id')->references('band_id')->on('bandpeople');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}