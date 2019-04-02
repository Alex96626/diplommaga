<?php

namespace App\Http\Controllers;

use App\page;
use Illuminate\Http\Request;

use App\features;
use App\getstarted;
use App\highlights;
use App\intro;
use App\menus;
use App\contact;
use App\title;
use App\gallery;


use Mail;
//use Illuminate\Support\Facades\Mail;


class IndexController extends Controller
{
    //

    public function execute(Request $request){


        if($request->isMethod('post'))
        {

            $messages = [

                'required' => "Поле :attribute обязательно для заполнения",
                'email' => "Поле :attribute должно соответствовать Email адресу",
                'in' => "Значение отличается от истенного",
                'integer' => "Значение должо быть числом"

            ];


            $this->validate($request,[

               'name'=>'required|max:255',
                'email'=>'required|email',
                'phone'=>'required',
                'subject'=>'required',
                'message'=>'required',
                'captcha'=>'required|integer|in:13',

            ], $messages);




                $data = $request->all();
                    dd($data);


                     $result = Mail::send('site.email',['data'=>$data],function ($message) use ($data){

                    $mail_admin = env('MAIL_ADMIN');

                    $message->from($data['email'],$data['name']);
                    $message->to($mail_admin,'Mr.Admin')->subject($data['subject']);




                });
//
//
//
//
//               if($result){
//
//                   return redirect()->route('home')->with('status', 'Email is send');
//
//               }
//
//                email
//
//

        }
//        dd(session('status'));
//        dd($request);
//        dd($data);


        $page = Page::all();
        $features = Features::all();
        $getstarted = Getstarted::all();
        $highlights = Highlights::all();
        $intro = Intro::all();
        $menus = Menus::all();
        $contact = Contact::all();
//        $title = Title::all();
        $gallery = Gallery::all();



        $pages = array();
        foreach ($page as $pag){
            $item = array('title'=>$pag->title,'text'=>$pag->text);
            array_push($pages,$item);
        }
//        dd($pages);

        $menuses = array();
        foreach ($menus as $menu){
            $item = array('title'=>$menu->title,'path'=>$menu->path,'content_title'=>$menu->content_title,'content_title_text'=>$menu->content_title_text,);
            array_push($menuses,$item);
        }
        $content_features = array();
        foreach ($features as $feature){
            $item  = array('title'=>$feature->title,'text'=>$feature->text,'class_icon'=>$feature->class_icon);
            array_push($content_features,$item);
        }

        $content_getstarted = array();
        foreach ($getstarted as $getstart){
            $item  = array('text'=>$getstart->text,'link'=>$getstart->link);
            array_push($content_getstarted,$item);
        }
        $content_highlights = array();
        foreach ($highlights as $highlight){
            $item  = array('title'=>$highlight->title,'text'=>$highlight->text,'class_icon'=>$highlight->class_icon);
            array_push($content_highlights,$item);
        }
        $content_intro = array();
        foreach ($intro as $intr){
            $item  = array('title'=>$intr->title,'text'=>$intr->text,'class_icon'=>$intr->class_icon);
            array_push($content_intro,$item);
        }
        $content_contact = array();
        foreach ($contact as $cont){
            $item  = array('title'=>$cont->title,'text'=>$cont->text);
            array_push($content_contact,$item);
        }
//        $content_title = array();
//        foreach ($title as $titl){
//            $item  = array('title'=>$titl->title,'text'=>$titl->text);
//            array_push($content_title,$item);
//        }
        $content_gallery = array();
        foreach ($gallery as $galler){
            $item  = array('img'=>$galler->img);
            array_push($content_gallery,$item);
        }




//          dd($content);
//        dd($menuses);
//        dd($content_intro);

        return view('site.index',array(
                                                'pages' => $pages,
                                                'menuses'=>$menuses,
                                                 'content_intro'=>$content_intro,
                                                 'admin_menus'=>$menus,
                                                 'content_features'=>$content_features,
                                                 'content_getstarted'=>$content_getstarted,
                                                 'content_highlights'=>$content_highlights,
                                                 'content_contact'=>$content_contact,
//                                                 'content_title'=>$content_title,
                                                 'content_gallery'=>$content_gallery,
                                            ));
    }
}
