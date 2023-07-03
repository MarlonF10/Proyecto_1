<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('appointment_code');
            $table->date('appointment_date');
            $table->date('next_appointment_date');
            $table->string('condition');
            $table->dateTime('register_date');
            $table->integer('patient')->unsigned();
            $table->foreign('patient')->references('id')->
            on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('doctor')->unsigned();
            $table->foreign('doctor')->references('id')->
            on('doctors')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('appointment_time')->unsigned();
            $table->foreign('appointment_time')->references('id')->
            on('appointment_times')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('appointments');
    }
}
