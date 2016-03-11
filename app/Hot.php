<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hot extends Model
{
    protected $fillable = [ 'name','venue','organizer','time','_from','_to','image_url','type','tel','deception'];
}
