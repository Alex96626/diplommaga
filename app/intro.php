<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class intro extends Model
{
    //
    protected $table = 'intro';

    protected $fillable = ['title','text','class_icon'];
}
