<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanPertanyaanPemulihan extends Model
{
    use HasFactory;

    protected $table = 'jawaban_pertanyaan_pemulihan';
    protected $fillable = ['user_id', 'pertanyaan_pemulihan_id', 'jawaban'];

    public function pertanyaanPemulihan()
    {
        return $this->belongsTo(PertanyaanPemulihan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
