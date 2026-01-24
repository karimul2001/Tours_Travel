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
        Schema::create('tour_packages', function (Blueprint $table) {
            $table->smallIncrements('id');  // smallint primary key
            $table->unsignedSmallInteger('tour_category_id');  // match smallIncrements
            $table->string('title', 100);
            $table->string('slug', 100)->unique();
            $table->decimal('price', 10, 2);
            $table->string('duration', 100);
            $table->string('location', 100);
            $table->text('description');
            $table->string('image', 100)->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();

            $table->foreign('tour_category_id')
                ->references('id')
                ->on('tour_categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_packages');
    }
};
