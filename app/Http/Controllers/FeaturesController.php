<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\features;

class FeaturesController extends Controller
{
    public function execute()
    {

        if (view()->exists('admin.admin_features.features')) {

            $features = features::all();

            $data = [

                'title' => ' Features',
                'features' => $features
            ];

            return view('admin.admin_features.features', $data);
        }
        abort(404);

    }
}