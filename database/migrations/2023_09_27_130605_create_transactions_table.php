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
        // Tabel transaksi
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('id_transaction');
            $table->date('date_transaction');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('product_id')->references('id_product')->on('products');
            $table->integer('quantity');
            $table->integer('subtotal_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
