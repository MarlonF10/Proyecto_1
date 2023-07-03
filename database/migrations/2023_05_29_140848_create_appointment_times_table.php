<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_times', function (Blueprint $table) {
            $table->increments('id');
            $table->string('appointment_time_code');
            $table->string('day');
            $table->string('shift');
            $table->time('star_time');
            $table->time('finish_time');
            $table->string('condition');
            $table->integer('doctor')->unsigned();
            $table->foreign('doctor')->references('id')->
            on('doctors')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('appointment_times');
    }
}
