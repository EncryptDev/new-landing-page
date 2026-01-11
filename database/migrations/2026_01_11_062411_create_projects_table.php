<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('short_description');
            $table->longText('description');
            $table->string('icon')->default('fa-code');
            $table->string('gradient_from')->default('blue-600');
            $table->string('gradient_to')->default('purple-600');
            $table->json('technologies')->nullable();
            $table->string('image')->nullable();
            $table->string('client')->nullable();
            $table->date('project_date')->nullable();
            $table->string('project_url')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
