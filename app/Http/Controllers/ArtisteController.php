<?php

namespace App\Http\Controllers;

use App\Artiste;
use Illuminate\Http\Request;

class ArtisteController extends Controller
{
    public function index()
    {
        return Artiste::all();
    }

    public function show(Request $request)
    {
        $artiste = Artiste::where('id_artiste', '=', $request->route('id_artiste'))->get();
        return $artiste;
    }

    public function create(Request $request)
    {
        $newArtist = Artiste::create(array(
            'nom_artiste' => $request->input('nom_artiste')
        ));

        return response()->json($newArtist, 210);
    }

    public function update(Request $request)
    {
        $artiste = Artiste::where('id_artiste', '=', $request->route('id_artiste'))->first();

        $artiste->nom_artiste = $request->input('nom_artiste');

        $artiste->save();

        return $artiste;
    }

    public function delete(Request $request)
    {
        $artiste = Artiste::where('id_artiste', '=', $request->route('id_artiste'))->first();
        $artiste->delete();

        return [];
    }


    //--------------------------------------
/*
    function displayAllArtists() {
        return Artiste::all();
    }

    function getArtist(Request $request) {
        $artiste = Artiste::where('id_artiste', '=', $request->route('id_artiste'))->get();
        return $artiste;
    } */


}
