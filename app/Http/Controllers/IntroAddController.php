<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Validator;
use App\intro;

class IntroAddController extends Controller
{

    public function  execute(Request $request){
//        dd($request);

        if($request->isMethod('post')) {
            $input = $request->except('_token');
//                dd($input);

            $massages = [

                'required'=>'Поле :attribute обязательно к заполнению'


            ];


            $validator = Validator::make($input,[

                'title' => 'required|max:255',
                'text' => 'required|max:255',
                'class_icon' => 'required|max:255'


            ],$massages);

            if($validator->fails()) {
                return redirect()->route('introAdd')->withErrors($validator)->withInput();
            }

            $intro = new Intro();

            $intro->fill($input);

            if($intro->save()){
                return redirect('admin')->with('status','Статья добавленна');
            }

        }

        if(view()->exists('admin.admin_intro.intro_add')){

            $data = [
               'title'=> 'Новая статья'

            ];
            return view('admin.admin_intro.intro_add',$data);

        }
        abort(404);

    }

}
