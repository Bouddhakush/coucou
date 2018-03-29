<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        return Genre::all();
    }

    public function show(Request $request)
    {
        $genre = Genre::where('id_genre', '=', $request->route('id_genre'))->get();
        return $genre;
    }

    public function create(Request $request)
    {
        $newGenre = Genre::create(array(
            'nom_genre' => $request->input('nom_genre')
        ));

        return response()->json($newGenre, 210);
    }
}
