<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return Image::all();
    }

    public function show(Request $request)
    {
        $image = Image::where('id_image', '=', $request->route('id_image'))->get();
        return $image;
    }

    public function create(Request $request)
    {
        $newImage = Image::create(array(
            'nom_image' => $request->input('nom_image')
        ));

        return response()->json($newImage, 210);
    }
}
