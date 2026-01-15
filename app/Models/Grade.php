<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Grade extends Model
{
    protected $fillable = [
        'assessment_id',
        'student_id',
        'score',
    ];
}
