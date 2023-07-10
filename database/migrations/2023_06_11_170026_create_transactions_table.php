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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id("id_transaction");
            $table->string("receipt_payment");
            $table->string("date");
            $table->string("status_deliver");
            $table->integer("total_price");
            $table->unsignedBigInteger('id_tenant');
            $table->foreign("id_tenant")->references('id_tenant')->on('users');
            $table->uuid('id_cart');
            $table->foreign("id_cart")->references('id_cart')->on('carts');
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
