<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemperaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // here we write the code to create the table and define columns
        Schema::create('temperatures',function(Blueprint $table){
            // id column
            $table->increments('id');
            // sensor id
            $table->string('sensor_id');
            // value
            $table->decimal('value');
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
        // here we must reverse the above (i.e. drop the table) to have backward compatability
        // you don't have to worry much about this.
        Schema::drop('temperatures');
    }
}
