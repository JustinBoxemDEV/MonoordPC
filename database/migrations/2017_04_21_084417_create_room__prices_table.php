<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room__prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('per_hour');
            $table->integer('per_two')->nullable();
            $table->integer('per_three')->nullable();
            $table->integer('per_two_plus')->nullable();
            $table->integer('per_three_plus')->nullable();
            $table->integer('five_ticket')->nullable();
            $table->integer('ten_ticket')->nullable();
            $table->boolean('daypart');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room__prices');
    }
}
