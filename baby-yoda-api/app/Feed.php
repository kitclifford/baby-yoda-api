<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $fillable = ["baby_yoda_id"];

    public function babyYoda()
    {
        return $this->belongsTo(BabyYoda::class);
    }
}
