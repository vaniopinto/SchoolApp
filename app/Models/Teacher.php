<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Teacher extends Model
{
    protected $fillable = [
        'user_id',
        'employee_number',
        'academic_title',
    ];
}
