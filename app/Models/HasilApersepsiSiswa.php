<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HasilApersepsiSiswa extends Model
{
    use HasFactory;
    protected $table = 'hasil_apersepsi_siswa';

    protected $fillable = [
        'pertemuan_id',
        'user_id',
        'jawaban',
    ];

    public function pertemuan(): BelongsTo
    {
        return $this->belongsTo(Pertemuan::class, 'pertemuan_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
