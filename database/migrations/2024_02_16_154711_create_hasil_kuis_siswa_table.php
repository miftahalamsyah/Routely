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
        Schema::create('hasil_kuis_siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('jawaban');
            $table->integer('dekomposisi')->nullable();
            $table->integer('abstraksi')->nullable();
            $table->integer('pengenalan_pola')->nullable();
            $table->integer('algoritma')->nullable();
            $table->integer('total')->nullable();
            $table->integer('benar')->nullable();
            $table->integer('salah')->nullable();
            $table->integer('kosong')->nullable();
            $table->foreignId('pertemuan_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_kuis_siswa');
    }
};
