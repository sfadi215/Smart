<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRainSensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // here we write the code to create the table and define columns
        Schema::create('rain_sensors',function(Blueprint $table){
            // id column
            $table->increments('id');
            // sensor id
            $table->string('name');
            $table->string('raining');
            // timestamps (when the row as created and when was last updated)
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
        //
        Schema::drop('rain');
    }
}
