<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Student extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',    
    ];
}
