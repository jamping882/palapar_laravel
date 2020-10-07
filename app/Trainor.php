<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainor extends Model
{
    public function course(){
        return $this->hasMany('App\Course');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
