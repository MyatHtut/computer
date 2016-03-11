<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $fillable = [
        'name','venue','organizer','speaker','time','_from','_to','ticket_place','image_url','state','type','tel','deception'
    ];
}
