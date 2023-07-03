<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('antecedent_code');
            $table->string('antecedent');
            $table->string('concept');
            $table->dateTime('register_date');
            $table->integer('treatment_type')->unsigned();
            $table->foreign('treatment_type')->references('id')->
            on('treatment_types')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('antecedents');
    }
}
