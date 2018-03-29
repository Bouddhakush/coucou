<?php

namespace App\Http\Controllers;

use App\Label;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function index()
    {
        return Label::all();
    }

    public function show(Request $request)
    {
        $label = Label::where('id_label', '=', $request->route('id_label'))->get();
        return $label;
    }

    public function create(Request $request)
    {
        $newLabel = Label::create(array(
            'nom_label' => $request->input('nom_label')
        ));

        return response()->json($newLabel, 210);
    }
}
