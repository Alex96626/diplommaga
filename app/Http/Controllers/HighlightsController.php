<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\highlights;

class HighlightsController extends Controller
{

    public function  execute(){

        if (view()->exists('admin.admin_highlights.highlights')){

            $highlights = highlights::all();

            $data = [

                'title' =>' Highlights',
                'highlights'=> $highlights
            ];

            return view('admin.admin_highlights.highlights',$data);
        }
        abort(404);

    }


}
