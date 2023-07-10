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
        Schema::create('menus', function (Blueprint $table) {
            $table->id("id_menu");
            $table->string("name");
            $table->integer("price");
            $table->string("photo")->nullable();
            $table->string("category");
            $table->string("description");
            $table->unsignedBigInteger('id_tenant');
            $table->foreign("id_tenant")->references('id_tenant')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
