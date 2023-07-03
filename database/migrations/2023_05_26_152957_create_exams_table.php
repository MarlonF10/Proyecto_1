<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exam_code');
            $table->string('results');
            $table->integer('doctor')->unsigned();
            $table->foreign('doctor')->references('id')->
            on('doctors')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('patient')->unsigned();
            $table->foreign('patient')->references('id')->
            on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('exam_type')->unsigned();
            $table->foreign('exam_type')->references('id')->
            on('exam_types')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('severity_type')->unsigned();
            $table->foreign('severity_type')->references('id')->
            on('severity_types')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('exams');
    }
}
