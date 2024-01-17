<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HasilTesSiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kategori_tes(): BelongsTo
    {
        return $this->belongsTo(KategoriTes::class, 'kategori_tes_id');
    }


}
