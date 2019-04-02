<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\features;


class FeaturesEditController extends Controller
{
    public function execute(Features $features,Request $request){
//        dd($intro);

        if ($request->isMethod('delete')){

            $features->delete();
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
                    ->route('featuresEdit',['features'=>$input['id']])
                    ->withErrors($validator);
            }
//            dd($input);
            $features->fill($input);
//
            if($features->update()) {
                return redirect('admin')->with('status','Страница обновлена');
            }



        }

        $old = $features->toArray();
//        dd($old);


        if(view()->exists('admin.admin_features.features_edit')){
//
            $data = [
//
                'title' => 'Редактирвоание станицы - '.$old['title'],
                'data' => $old
            ];
//
            return view('admin.admin_features.features_edit',$data);
//
        }

    }
}
