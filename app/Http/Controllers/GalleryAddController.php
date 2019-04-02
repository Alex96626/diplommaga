<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\gallery;

class GalleryAddController extends Controller
{
    public function  execute(Request $request){
//        dd($request);

        if($request->isMethod('post')) {
        //    dd($request);
            $input = $request->except('_token');
//                dd($input);

            $massages = [

                'required'=>'Поле :attribute обязательно к заполнению'


            ];


            $validator = Validator::make($input,[

                'img' => 'required|max:255'



            ],$massages);

            if($validator->fails()) {
                return redirect()->route('galleryAdd')->withErrors($validator)->withInput();
            }
        if($request->hasFile('img')){
            $file = $request->file('img');
            $input['img'] = $file->getClientOriginalName();
           


            $file->move(public_path().'/assets/image',$input['img']);
        }



            $gallery = new Gallery();
            $gallery->fill($input);
        //    dd($$gallery->fill($input));

            if($gallery->save()){
                return redirect('admin')->with('status','Картинка добавленна');
            }

        }

        if(view()->exists('admin.admin_gallery.gallery_add')){

            $data = [
                'title'=> 'Загрузить новую картинку'

            ];
            return view('admin.admin_gallery.gallery_add',$data);

        }
        abort(404);

    }
}
