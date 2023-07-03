<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medical_file_code');
            $table->dateTime('register_date');
            $table->integer('consultation')->unsigned();
            $table->foreign('consultation')->references('id')->
            on('consultations')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('prescription')->unsigned();
            $table->foreign('prescription')->references('id')->
            on('prescriptions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('medical_files');
    }
}
