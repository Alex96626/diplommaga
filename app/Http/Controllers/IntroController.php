<?php

namespace App\Http\Controllers;

use App\page;
use Illuminate\Http\Request;

use App\intro;

class IntroController extends Controller
{

    public function  execute(){

       if (view()->exists('admin.admin_intro.intro')){

           $intro = intro::all();

           $data = [

               'title' =>' Intro',
               'intro'=> $intro
           ];

           return view('admin.admin_intro.intro',$data);
       }
       abort(404);

    }


}
