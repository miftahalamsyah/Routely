<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriTes extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'passcode'
    ];

    public function soal_tes(): HasMany
    {
        return $this->hasMany(SoalTes::class, 'kategori_tes_id');
    }

    public function hasil_tes_siswa(): HasMany
    {
        return $this->hasMany(SoalTes::class, 'hasil_tes_siswa_id');
    }
}
