<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $fillable = ['title','dec','hint','image','publish_date','author'];

}
