<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entertainment extends Model
{
    protected $fillable = [ 'name','venue','organizer','time','_from','_to','price','image_url','ticket_place','type','tel','deception'];
}
