<?php

namespace App\Models;

use App\Http\Models\User;
use App\Http\Models\Pertemuan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $table = 'tugas'; // Specify the correct table name here


    public function user()
    {
        return $this->belongsTo(User::class)->where('is_admin', 0);
    }

    public function pertemuan()
    {
        return $this->hasMany(Pertemuan::class, 'tugas_id');
    }

}
