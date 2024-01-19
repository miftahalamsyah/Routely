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
        Schema::create('kategori_tes', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('kategori_tes');
            $table->string('waktu_tes');
            $table->string('passcode')->nullable();
            $table->boolean('status_tes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_tes');
    }
};
