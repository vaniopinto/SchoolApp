<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids; 

class CourseSubject extends Model
{
    protected $fillable = [
        'course_id',
        'subject_id',
        'level_id',
    ];
}
