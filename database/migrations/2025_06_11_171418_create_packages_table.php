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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('destination');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->integer('duration_days');
            $table->integer('max_persons')->default(2);
            $table->string('image_main'); // Main image path
            $table->json('gallery_images'); // Array of image paths for carousel
            $table->boolean('is_featured')->default(false);
            $table->integer('rating')->default(5); // 1-5 star rating
            $table->string('package_type'); // '3-day' or '7-day'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
