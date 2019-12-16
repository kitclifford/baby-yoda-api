<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BabyYoda extends Model
{
    protected $fillable = ["name", "colour", "health", "age", "alive" ];
}
