<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('consultation_code');
            $table->string('blood_pressure');
            $table->string('temperature');
            $table->string('breathing_frequency');
            $table->string('heart_rate');
            $table->string('saturation');
            $table->string('body_weight');
            $table->string('body_height');
            $table->string('time_symptoms');
            $table->string('physical_exam');
            $table->integer('patient')->unsigned();
            $table->foreign('patient')->references('id')->
            on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('antecedent')->unsigned();
            $table->foreign('antecedent')->references('id')->
            on('antecedents')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('exam')->unsigned();
            $table->foreign('exam')->references('id')->
            on('exams')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('disease')->unsigned();
            $table->foreign('disease')->references('id')->
            on('diseases')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('severity_type')->unsigned();
            $table->foreign('severity_type')->references('id')->
            on('severity_types')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('tratment_type')->unsigned();
            $table->foreign('tratment_type')->references('id')->
            on('treatment_types')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('consultations');
    }
}
