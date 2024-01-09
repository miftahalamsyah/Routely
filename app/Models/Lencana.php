<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lencana extends Model
{
    use HasFactory;

    protected $table = 'lencana';

    protected $fillable = [
        'nama_lencana',
        'gambar_lencana',
    ];

}
