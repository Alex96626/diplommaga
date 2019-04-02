<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\gallery;

class GalleryEditController extends Controller
{
    public function execute(Gallery $gallery,Request $request){
//        dd($intro);

        if ($request->isMethod('delete')){

            $gallery->delete();
            return redirect('admin')->with('status','Страница удалена');

        }

        if($request->isMethod('post')) {


            $input = $request->except('_token');
//        dd($input);
            $validator = Validator::make($input,[
//
                'img'=>'required'


            ]);


//            dd($input);
            if($validator->fails()) {
                return redirect()
                    ->route('galleryEdit',['gallery'=>$input['id']])
                    ->withErrors($validator);
            }
            if($request->hasFile('img')){
              $file = $request->file('img');
              $file->move(public_path().'/assets/image',$file->getClientOriginalName());  
              $input['img'] = $file->getClientOriginalName();

            }
            else{
                $input['img'] = $input['old_images'];
            }
            unset($input['old_images']);

            // $gallery->file($input);
//            dd($input);
            $gallery->fill($input);
//
            if($gallery->update()) {
                return redirect('admin')->with('status','Страница обновлена');
            }



        }

        $old = $gallery->toArray();
//        dd($old);


        if(view()->exists('admin.admin_gallery.gallery_edit')){
//
            $data = [
//
                'title' => 'Редактирвоание станицы - Gallery',
                'data' => $old
            ];
//
            return view('admin.admin_gallery.gallery_edit',$data);
//
        }

    }
}
