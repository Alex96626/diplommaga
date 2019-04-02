<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\highlights;

class HighlightsAddController extends Controller
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
                return redirect()->route('highlightsAdd')->withErrors($validator)->withInput();
            }

            $highlights = new Highlights();

            $highlights->fill($input);

            if($highlights->save()){
                return redirect('admin')->with('status','Статья добавленна');
            }

        }

        if(view()->exists('admin.admin_highlights.highlights_add')){

            $data = [
                'title'=> 'Новая статья'

            ];
            return view('admin.admin_highlights.highlights_add',$data);

        }
        abort(404);

    }


}
