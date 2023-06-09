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
        Schema::create('cart_menus', function (Blueprint $table) {
            $table->id("id_cart_menus");
            $table->integer("quantity");
            $table->integer("total_price_per_menu");
            $table->unsignedBigInteger('id_menu');
            $table->foreign("id_menu")->references('id_menu')->on('menus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_menus');
    }
};
