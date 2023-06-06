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
        Schema::create('language_proyect', function (Blueprint $table) {
            $table->unsignedBigInteger("proyect_id");
            $table->unsignedBigInteger("language_id");
            $table->unsignedBigInteger("framework_id")->nullable();
            $table->foreign('framework_id')->references('id')->on('frameworks');
            $table->foreign('proyect_id')->references('id')->on('proyects');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('language__proyect');
    }
};
