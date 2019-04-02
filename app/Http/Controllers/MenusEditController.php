<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menus;
use Validator;

class MenusEditController extends Controller
{
    public function execute(Menus $menus,Request $request){
//        dd($intro);

        if ($request->isMethod('delete')){

            $menus->delete();
            return redirect('admin')->with('status','Страница удалена');

        }

        if($request->isMethod('post')) {


            $input = $request->except('_token');
//        dd($input);
            $validator = Validator::make($input,[
//
                'title'=>'required|max:255',
                'content_title'=>'required|max:255',
                'content_title_text'=>'max:255',
                'path'=>'required|max:255',


            ]);


//            dd($input);
            if($validator->fails()) {
                return redirect()
                    ->route('menusEdit',['menus'=>$input['id']])
                    ->withErrors($validator);
            }
//            dd($input);
            $menus->fill($input);
//
            if($menus->update()) {
                return redirect('admin')->with('status','Страница обновлена');
            }



        }

        $old = $menus->toArray();
//        dd($old);


        if(view()->exists('admin.admin_menus.menus_edit')){
//
            $data = [
//
                'title' => 'Редактирвоание станицы - Menus',
                'data' => $old
            ];
//
            return view('admin.admin_menus.menus_edit',$data);
//
        }

    }
}
