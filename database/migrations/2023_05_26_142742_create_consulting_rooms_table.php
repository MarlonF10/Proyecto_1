<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultingRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulting_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('consulting_room_code');
            $table->string('consulting_room_number');
            $table->string('concept');
            $table->string('condition');
            $table->date('register_date');
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
        Schema::dropIfExists('consulting_rooms');
    }
}
