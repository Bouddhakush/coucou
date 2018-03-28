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

    public function show(Artiste $artiste)
    {
        return $artiste;
    }

    public function store(Request $request)
    {
        $artiste = Artiste::create($request->all());

        return response()->json($artiste, 201);
    }

    public function update(Request $request, Artiste $artiste)
    {
        $artiste->update($request->all());

        return response()->json($artiste, 200);
    }

    public function delete(Artiste $artiste)
    {
        $artiste->delete();

        return response()->json(null, 204);
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
