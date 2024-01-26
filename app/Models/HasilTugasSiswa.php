<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class HasilTugasSiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'hasil_tugas_siswas';

    public function tugas(): BelongsTo
    {
        return $this->belongsTo(Tugas::class, 'tugas_id');
    }

    public function nilaitugas(): HasOne
    {
        return $this->hasOne(NilaiTugas::class, 'nilai_tugas_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
