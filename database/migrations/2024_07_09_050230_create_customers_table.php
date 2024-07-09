<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->foreignId('branch_id');
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
        Schema::dropIfExists('customers');
    }
};
