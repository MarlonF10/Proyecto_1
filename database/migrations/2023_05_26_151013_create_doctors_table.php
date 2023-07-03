<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
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
            $table->integer('speciality')->unsigned();
            $table->foreign('speciality')->references('id')->
            on('specialities')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('consulting_room')->unsigned();
            $table->foreign('consulting_room')->references('id')->
            on('consulting_rooms')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('doctors');
    }
}
