<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';

    protected $fillable = [
        'user_id',
        'pretest',
        'posttest',
        'total_nilai'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::saving(function ($nilai) {
            $nilai->total_nilai = $nilai->pretest + $nilai->posttest;
        });
    }

    public function hasilTesSiswa(): BelongsTo
    {
        return $this->belongsTo(HasilTesSiswa::class, 'user_id', 'user_id');
    }

}
