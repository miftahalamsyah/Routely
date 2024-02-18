<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertanyaanPemulihan extends Model
{
    use HasFactory;

    protected $table = "pertanyaan_pemulihan";
    protected $guarded = ['id'];
    protected $fillable = ['pertanyaan'];

    public function jawabanPertanyaanPemulihan()
    {
        return $this->hasMany(JawabanPertanyaanPemulihan::class);
    }
}
