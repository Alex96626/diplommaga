<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\menus;

class MenusAddController extends Controller
{
    public function  execute(Request $request){


        if($request->isMethod('post')) {
            $input = $request->except('_token');


            $massages = [

                'required'=>'Поле :attribute обязательно к заполнению'


            ];


            $validator = Validator::make($input,[

                'title' => 'required|max:255',
                'content_title' => 'required|max:255',
                'content_title_text' => 'max:255',
                'path' => 'required|max:255'


            ],$massages);

            if($validator->fails()) {
                return redirect()->route('menusAdd')->withErrors($validator)->withInput();
            }

            $menus = new Menus();

            $menus->fill($input);

            if($menus->save()){
                return redirect('admin')->with('status','Статья добавленна');
            }

        }

        if(view()->exists('admin.admin_menus.menus_add')){

            $data = [
                'title'=> 'Новая статья'

            ];
            return view('admin.admin_menus.menus_add',$data);

        }
        abort(404);

    }
}
