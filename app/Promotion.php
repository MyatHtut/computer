<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = [
        'name','venue','organizer','image_url','time','from','to','rate','tel','deception'
    ];
}
