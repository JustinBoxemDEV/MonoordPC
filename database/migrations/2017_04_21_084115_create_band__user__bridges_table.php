<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandUserBridgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('band__user__bridges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('band_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
        
        Schema::table('band__user__bridges', function (Blueprint $table)
        {
            $table->foreign('band_id')->references('id')->on('bands');   
        });
        
        Schema::table('band__user__bridges', function (Blueprint $table)
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
        Schema::dropIfExists('band__user__bridges');
    }
}
