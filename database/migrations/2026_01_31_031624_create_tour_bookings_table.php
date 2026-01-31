<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tour_bookings', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('tour_package_id');
            $table->unsignedBigInteger('user_id');
            $table->date('tour_date');
            $table->unsignedSmallInteger('persons')->default(1);
            $table->decimal('price_per_person', 10, 2);
            $table->decimal('total_price', 10, 2);
            $table->enum('booking_status', ['pending', 'confirmed', 'cancelled'])
                ->default('pending');
            $table->enum('payment_status', ['unpaid', 'paid', 'refunded'])
                ->default('unpaid');
            $table->timestamps();
            $table->foreign('tour_package_id')
                ->references('id')
                ->on('tour_packages')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_bookings');
    }
};
