<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\highlights;

class HighlightsEditController extends Controller
{

    public function execute(Highlights $highlights,Request $request){
//        dd($intro);

        if ($request->isMethod('delete')){

            $highlights->delete();
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
                    ->route('highlightsEdit',['highlights'=>$input['id']])
                    ->withErrors($validator);
            }
//            dd($input);
            $highlights->fill($input);
//
            if($highlights->update()) {
                return redirect('admin')->with('status','Страница обновлена');
            }



        }

        $old = $highlights->toArray();
//        dd($old);


        if(view()->exists('admin.admin_highlights.highlights_edit')){
//
            $data = [
//
                'title' => 'Редактирвоание станицы - '.$old['title'],
                'data' => $old
            ];
//
            return view('admin.admin_highlights.highlights_edit',$data);
//
        }

    }

}
