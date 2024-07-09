<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id');
            $table->foreignId('customer_id');
            $table->decimal('amount');
            $table->decimal('vat');
            $table->decimal('paid_amount');
            $table->decimal('return_amount');
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
        Schema::dropIfExists('invoices');
    }
};
