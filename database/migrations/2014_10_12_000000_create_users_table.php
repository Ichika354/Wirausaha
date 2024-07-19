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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('user_id')->primary();
            $table->string('fullname');
            $table->string('npm');
            $table->string('phone_number');
            $table->enum('role', ['Admin', 'Seller', 'Buyer']);
            $table->string('email')->unique();
            $table->string('password');
            // $table->unsignedBigInteger('province_id');
            // $table->unsignedBigInteger('regency_id');
            // $table->unsignedBigInteger('district_id');
            // $table->unsignedBigInteger('village_id');
            // $table->unsignedBigInteger('street');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
