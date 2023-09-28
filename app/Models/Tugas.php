<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Tugas extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $guarded=['id'];
    protected $with = ['pertemuan'];

    public function pertemuan(): BelongsTo
    {
        return $this->belongsTo(Pertemuan::class, 'pertemuan_id');
    }

}
