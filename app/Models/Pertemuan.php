<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    use HasFactory;
    protected $table = 'pertemuan';
    protected $guarded = ['id'];

    public function materi()
    {
        return $this->belongsToMany(Materi::class);
    }

    public function tugas()
    {
        return $this->belongsToMany(Tugas::class);
    }
}
