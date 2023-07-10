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
        Schema::create('cart_transactions', function (Blueprint $table) {
            $table->id("id_cart_transactions");
            $table->unsignedBigInteger('id_cart_menus');
            $table->foreign("id_cart_menus")->references('id_cart_menus')->on('cart_menus');
            $table->uuid('id_cart');
            $table->foreign('id_cart')->references('id_cart')->on('carts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_transactions');
    }
};
