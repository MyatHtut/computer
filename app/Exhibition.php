<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    protected $fillable = [

        "name","type","address","phone","image"

    ];

}
