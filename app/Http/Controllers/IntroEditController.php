<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\intro;

class IntroEditController extends Controller
{

    public function execute(Intro $intro,Request $request){
//        dd($intro);

        if ($request->isMethod('delete')){

            $intro->delete();
            return redirect('admin')->with('status','Страница удалена');

        }

        if($request->isMethod('post')) {


            $input = $request->except('_token');
//        dd($input);
            $validator = Validator::make($input,[
//
            'title'=>'required',
            'text'=>'required|max:255',
            'class_icon'=>'required|max:20'

        ]);


//            dd($input);
            if($validator->fails()) {
                return redirect()
                    ->route('introEdit',['intro'=>$input['id']])
                    ->withErrors($validator);
            }
//            dd($input);
            $intro->fill($input);
//
            if($intro->update()) {
                return redirect('admin')->with('status','Страница обновлена');
            }



    }

        $old = $intro->toArray();
//        dd($old);


        if(view()->exists('admin.admin_intro.intro_edit')){
//
            $data = [
//
                'title' => 'Редактирвоание станицы - '.$old['title'],
                'data' => $old
            ];
//
            return view('admin.admin_intro.intro_edit',$data);
//
        }

    }


}
