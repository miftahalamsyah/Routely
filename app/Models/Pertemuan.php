<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    protected $table = 'pertemuan';
    protected $fillable = [
        'pertemuan_ke',
        'tanggal'
    ];

    public function materi()
    {
        return $this->belongsToMany(Materi::class);
    }

    public function tugas()
    {
        return $this->belongsToMany(Tugas::class);
    }
}
