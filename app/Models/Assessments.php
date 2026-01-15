<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
class assessments extends Model
{
    protected $fillable = [
        'subject_id',
        'class_id',
        'semester_id',
        'type',
        'weight',
    ];
}
