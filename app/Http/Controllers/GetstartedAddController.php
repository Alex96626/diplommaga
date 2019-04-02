<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\getstarted;

class GetstartedAddController extends Controller
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

                'link' => 'required|max:255',
                'text' => 'required|max:255',



            ],$massages);

            if($validator->fails()) {
                return redirect()->route('getstartedAdd')->withErrors($validator)->withInput();
            }

            $getstarted = new Getstarted();

            $getstarted->fill($input);
//            dd($getstarted->fill($input));

            if($getstarted->save()){
                return redirect('admin')->with('status','Статья добавленна');
            }

        }

        if(view()->exists('admin.admin_getstarted.getstarted_add')){

            $data = [
                'title'=> 'Новая статья'

            ];
            return view('admin.admin_getstarted.getstarted_add',$data);

        }
        abort(404);

    }
}
