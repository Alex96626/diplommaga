<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\getstarted;

class GetstartedController extends Controller
{
    public function execute()
    {

        if (view()->exists('admin.admin_getstarted.getstarted')) {

            $getstarted = getstarted::all();

            $data = [

                'title' => ' Getstarted',
                'getstarted' => $getstarted
            ];
//            dd($data);

            return view('admin.admin_getstarted.getstarted', $data);
        }
        abort(404);

    }
}
