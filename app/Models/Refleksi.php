<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Refleksi extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    protected $fillable = [
        'pertemuan_id',
        'user_id',
        'seberapa_paham',
        'seberapa_baik',
        'seberapa_sulit',
        'hambatan',
        'saran',
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
