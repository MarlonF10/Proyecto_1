<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecepcionistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepcionists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('DNI');
            $table->string('age');
            $table->string('gender');
            $table->string('address');
            $table->string('phone_number');
            $table->string('email');
            $table->string('URL_image');
            $table->string('image_name');
            $table->string('departament');
            $table->string('municipality');
            $table->dateTime('register_date');
            $table->integer('area')->unsigned();
            $table->foreign('area')->references('id')->
            on('areas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('recepcionists');
    }
}
