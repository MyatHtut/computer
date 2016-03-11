<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favitem extends Model
{
    //
    public function fav()
    {
        return $this->belongsTo('App\Fav');
    }

    public function exhibition()
    {
        return $this->belongsTo('App\Exhibition');
    }

//    public function promotion()
//    {
//        return $this->belongsTo('App\Promotion');
//    }

}
