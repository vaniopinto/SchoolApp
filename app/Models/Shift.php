<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = [ "slug", "name", "starts_at", "ends_at" ];
}
