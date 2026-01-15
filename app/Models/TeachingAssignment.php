<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class TeachingAssignment extends Model
{
    protected $fillable = [
        'teacher_id',
        'subject_id',
        'class_id',
        'semester_id',
    ];
}
