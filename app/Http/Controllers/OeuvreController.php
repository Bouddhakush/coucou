<?php

namespace App\Http\Controllers;

use App\Oeuvre;
use Illuminate\Http\Request;

class OeuvreController extends Controller
{
    public function index()
    {
        return Oeuvre::all();
    }

    public function show(Request $request)
    {
        $oeuvre = Oeuvre::where('id_oeuvre', '=', $request->route('id_oeuvre'))->get();
        return $oeuvre;
    }

    public function create(Request $request)
    {
        $newOeuvre = Oeuvre::create(array(
            'nom_oeuvre' => $request->input('nom_oeuvre')
        ));

        return response()->json($newOeuvre, 210);
    }
}