<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';

    protected $fillable = [
        'user_id',
        'pretest',
        'posttest',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
