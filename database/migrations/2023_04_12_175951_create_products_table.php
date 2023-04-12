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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->boolean('dollar_or_sum');
            $table->bigInteger('dollar_cost')->nullable();
            $table->bigInteger('cost')->nullable();
            $table->bigInteger('price');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('provider_id')->constrained();
            $table->foreignId('dis_count_id')->constrained()->cascadeOnDelete();
            $table->foreignId('product_count_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
