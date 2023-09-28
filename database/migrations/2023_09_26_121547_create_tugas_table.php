<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasTable extends Migration
{
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pertemuan_id');
            $table->string('name'); // Nama tugas
            $table->text('slug');
            $table->text('description')->nullable(); // Deskripsi tugas
            $table->dateTime('due_date'); // Tanggal batas pengumpulan
            $table->decimal('maximum_score', 5, 2); // Nilai maksimal
            $table->enum('submission_status', ['submitted', 'not_submitted'])->default('not_submitted'); // Status pengumpulan
            $table->decimal('score', 5, 2)->default('100'); // Nilai yang didapatkan siswa
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tugas');
    }
};
