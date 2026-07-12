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
        Schema::create('saas_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tagline');
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->string('status')->default('Active');
            $table->boolean('is_under_development')->default(false);
            $table->text('description');
            $table->text('features');
            $table->string('active_users')->nullable();
            $table->string('daily_transactions')->nullable();
            $table->string('url')->nullable();
            $table->string('demo_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saas_products');
    }
};
