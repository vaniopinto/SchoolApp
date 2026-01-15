<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class ClassGroups extends Model
{
    use HasUuids;

    protected $fillable = [
        'course_id',
        'level_id',
        'academic_year_id',
        'shift_id',
        'code',
    ];
}
