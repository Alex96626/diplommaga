<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menus extends Model
{
    //
    protected $table = 'menus';
    protected $fillable = ['title','path','content_title','content_title_text'];
}
