<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prescription_code');
            $table->string('medicine');
            $table->string('dose');
            $table->string('amount');
            $table->string('indications');
            $table->string('duration');
            $table->dateTime('register_date');
            $table->integer('consultation')->unsigned();
            $table->foreign('consultation')->references('id')->
            on('consultations')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('prescriptions');
    }
}
