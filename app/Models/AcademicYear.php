<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class AcademicYear extends Model
{
    use HasUuids;

    protected $fillable = [ "name", "starts_at", "ends_at", "is_active" ];
}
