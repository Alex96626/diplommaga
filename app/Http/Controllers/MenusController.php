<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menus;

class MenusController extends Controller
{
    public function execute()
    {

        if (view()->exists('admin.admin_menus.menus')) {

            $menus = menus::all();

            $data = [

                'title' => 'Menus',
                'menus' => $menus
            ];

            return view('admin.admin_menus.menus', $data);
        }
        abort(404);

    }
}
