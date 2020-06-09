<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $guarded = ['id'];

    public function courses(){
        $this->belongsToMany('App\Course');
    }
}
