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
            $table->id('product_id');
            $table->string('name')->nullable();
            $table->integer('price')->default(0);
            $table->bigInteger('brand_id')->nullable();
            $table->string('size')->nullable();
            $table->string('tool')->nullable();
            $table->string('color')->nullable();
            $table->text('detail')->nullable();
            $table->string('image')->nullable();
            $table->integer('viewcount')->default(0);
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
