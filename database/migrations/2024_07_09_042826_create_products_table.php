<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon');
            $table->string('thumbnails')->nullable();
            $table->string('color')->nullable();
            $table->string('barcode')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('total_sale')->nullable();
            $table->decimal('buy_price')->nullable();
            $table->decimal('discount')->nullable();
            $table->decimal('sale_price')->nullable();
            $table->foreignId('unit_id')->nullable();
            $table->foreignId('brand_id')->nullable();
            $table->foreignId('supplier_id')->nullable();
            $table->string('description')->nullable();
            $table->json('props')->nullable();
            $table->boolean('status')->default('1');
            $table->foreignId('created_by');
            $table->timestamps();
            $table->foreignId('updated_by')->nullable();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
