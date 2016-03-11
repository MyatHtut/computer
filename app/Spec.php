<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    protected $fillable = ['name','os','color','cpu','gcard','ram','storage','other','brand','shop'];

}
