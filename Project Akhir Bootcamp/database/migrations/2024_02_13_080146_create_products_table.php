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
            $table->string('product_name', 100);
            $table->string('product_slug');
            $table->unsignedBigInteger('category_id');
            $table->text('product_desc');
            $table->enum('product_status', ['draft', 'publish']);
            $table->integer('product_price')->default(0);
            $table->integer('product_weight')->default(0);
            $table->string('product_img_url', 150);
            $table->timestamps();

            $table->foreign('category_id')->references('category_id')->on('category')->onDelete('cascade')->onUpdate('cascade');
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
