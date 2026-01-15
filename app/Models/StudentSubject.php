<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class StudentSubject extends Model
{
    protected $fillable = [
        'enrollment_id',
        'subject_id',
        'semester_id',
    ];  
}
