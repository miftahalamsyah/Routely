<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'thumbnail_image',
        'pdf_file',
        'description',
    ];

    protected $guarded=['id'];
    protected $with = ['pertemuan'];

    public function pertemuan()
    {
        return $this->belongsToMany(Pertemuan::class, 'pertemuan_id');
    }
}
