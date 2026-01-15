<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Shift extends Model
{
    protected $fillable = [ "slug", "name", "starts_at", "ends_at" ];
}
