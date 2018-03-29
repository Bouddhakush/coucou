<?php

namespace App\Http\Controllers;

use App\Son;
use Illuminate\Http\Request;

class SonController extends Controller
{
    public function index()
    {
        return Son::all();
    }

    public function show(Request $request)
    {
        $son = Son::where('id_son', '=', $request->route('id_son'))->get();
        return $son;
    }

    public function create(Request $request)
    {
        $newSon = Son::create(array(
            'nom_son' => $request->input('nom_son')
        ));

        return response()->json($newSon, 210);
    }
}
