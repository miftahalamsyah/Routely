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
        Schema::create('soal_kuis', function (Blueprint $table) {
            $table->id();
            $table->string('indikator');
            $table->text('pertanyaan'); // Changed from string to text
            $table->string('gambar')->nullable();
            $table->text('jawaban_a'); // Changed from string to text
            $table->text('jawaban_b'); // Changed from string to text
            $table->text('jawaban_c'); // Changed from string to text
            $table->text('jawaban_d'); // Changed from string to text
            $table->text('jawaban_e'); // Changed from string to text
            $table->string('kunci_jawaban');
            $table->text('pembahasan')->nullable(); // Changed from string to text
            $table->foreignId('pertemuan_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal_kuis');
    }
};
