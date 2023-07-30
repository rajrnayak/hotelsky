<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_historys', function (Blueprint $table) {
            $table->id('room_history_id');
  
            $table->unsignedBigInteger('room_history_room_category_id');
            $table->foreign('room_history_room_category_id')->references('room_category_id')->on('room_categories');

            $table->unsignedBigInteger('room_history_room_id');
            $table->foreign('room_history_room_id')->references('room_id')->on('rooms');

            $table->unsignedBigInteger('room_history_room_booking_id');
            $table->foreign('room_history_room_booking_id')->references('room_booking_id')->on('room_bookings');

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
        Schema::dropIfExists('room_historys');
    }
};
