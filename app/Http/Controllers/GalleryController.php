<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gallery;

class GalleryController extends Controller
{
    public function execute()
    {

        if (view()->exists('admin.admin_gallery.gallery')) {

            $gallery = gallery::all();

            $data = [

                'title' => 'Gallery',
                'gallery' => $gallery
            ];

            return view('admin.admin_gallery.gallery', $data);
        }
        abort(404);

    }
}
