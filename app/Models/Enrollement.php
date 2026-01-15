<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Enrollement extends Model
{
    protected $fillable = [
        'student_id',
        'level_id',
        'enrollement_date',
    ];  
}
