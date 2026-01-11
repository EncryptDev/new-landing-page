<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company');
            $table->string('position')->nullable();
            $table->text('testimonial');
            $table->integer('rating')->default(5);
            $table->string('avatar')->nullable();
            $table->string('initials', 3);
            $table->string('gradient_from')->default('blue-500');
            $table->string('gradient_to')->default('purple-600');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
