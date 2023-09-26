<?php

namespace App\Models;

use App\Http\Models\User;
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
    protected $fillable = [
        'name',
        'description',
        'due_date',
        'maximum_score',
        'score',
        'submission_status',
        'assign_to',
        'user_id',

    ];

    public function user()
    {
        return $this->belongsTo(User::class)->where('is_admin', 0);
    }

}
