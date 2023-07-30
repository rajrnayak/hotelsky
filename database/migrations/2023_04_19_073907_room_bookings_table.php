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
        Schema::create('room_bookings', function (Blueprint $table) {
            $table->id('room_booking_id');

            $table->unsignedBigInteger('room_booking_room_category_id');
            $table->foreign('room_booking_room_category_id')->references('room_category_id')->on('room_categories');

            $table->unsignedBigInteger('room_booking_room_id');
            $table->foreign('room_booking_room_id')->references('room_id')->on('rooms');

            $table->string('customer_name');
            $table->string('customer_email')->unique();
            $table->string('customer_phoneno');
            $table->string('customer_address');
            $table->string('customer_members');
            $table->date('checkin_date');
            $table->date('checkout_date');

            $table->rememberToken();
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
        Schema::dropIfExists('room_bookings');

    }
};
