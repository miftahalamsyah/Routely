<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Absensi extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    protected $fillable = ['user_id', 'pertemuan_id', 'hadir', 'keterangan'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function pertemuan(): BelongsTo
    {
        return $this->belongsTo(Pertemuan::class);
    }
}
