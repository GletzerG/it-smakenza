<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absention extends Model
{
    protected $fillable = [
        'date',
        'status',
        'student_id',
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
