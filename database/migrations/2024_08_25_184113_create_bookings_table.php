<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id');
            $table->foreignId('user_id');
            $table->dateTime('booking_date');
            $table->dateTime('check_in_date');
            $table->dateTime('check_out_date');
            $table->decimal('total_price');
            $table->enum('status', ['Pending', 'Confirmed', 'Checked In', 'Checked Out', 'Canceled']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
