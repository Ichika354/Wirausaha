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
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('order_id')->primary();
            $table->uuid('user_id');
            // $table->uuid('address_id');
            $table->uuid('seller_id');
            $table->uuid('product_id');
            $table->integer('qty');
            $table->enum('status', ['Unpaid', 'Paid']);
            $table->bigInteger('total_price');
            $table->timestamps();

            // $table->foreign('user_id')->references('user_id')->on('addresses');
            // $table->foreign('address_id')->references('address_id')->on('addresses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
