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
            $table->string('tugas_file')->nullable();
            $table->dateTime('due_date'); // Tanggal batas pengumpulan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tugas');
    }
};
