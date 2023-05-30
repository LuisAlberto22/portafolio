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
        Schema::create('proyect_tecnology', function (Blueprint $table) {
            $table->unsignedBigInteger("proyect_id");
            $table->foreign('proyect_id')->references('id')->on('proyects');
            $table->unsignedBigInteger("tecnology_id");
            $table->foreign('tecnology_id')->references('id')->on('tecnologies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
