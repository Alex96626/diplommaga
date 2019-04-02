<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\getstarted;
use Validator;

class GetstartedEditController extends Controller
{
    public function execute(Getstarted $getstarted,Request $request){
//        dd($intro);

        if ($request->isMethod('delete')){

            $getstarted->delete();
            return redirect('admin')->with('status','Страница удалена');

        }

        if($request->isMethod('post')) {


            $input = $request->except('_token');
//        dd($input);
            $validator = Validator::make($input,[
//
                'link'=>'required',
                'text'=>'required|max:255'


            ]);


//            dd($input);
            if($validator->fails()) {
                return redirect()
                    ->route('getstartedEdit',['getstarted'=>$input['id']])
                    ->withErrors($validator);
            }
//            dd($input);
            $getstarted->fill($input);
//
            if($getstarted->update()) {
                return redirect('admin')->with('status','Страница обновлена');
            }



        }

        $old = $getstarted->toArray();
//        dd($old);


        if(view()->exists('admin.admin_getstarted.getstarted_edit')){
//
            $data = [
//
                'title' => 'Редактирвоание станицы - '.$old['link'],
                'data' => $old
            ];
//
            return view('admin.admin_getstarted.getstarted_edit',$data);
//
        }

    }
}
