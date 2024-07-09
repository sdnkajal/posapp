<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sale_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id');
            $table->foreignId('product_id');
            $table->foreignId('brand_id');
            $table->foreignId('supplier_id');
            $table->foreignId('category_id');
            $table->foreignId('customer_id');
            $table->integer('quantity');
            $table->foreignId('unit_id');
            $table->decimal('discount');
            $table->decimal('price');
            $table->string('last_sale_price');
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
        Schema::dropIfExists('sale_lists');
    }
};
