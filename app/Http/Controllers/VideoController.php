<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return Video::all();
    }

    public function show(Request $request)
    {
        $video = Video::where('id_video', '=', $request->route('id_video'))->get();
        return $video;
    }

    public function create(Request $request)
    {
        $newVideo = Video::create(array(
            'nom_video' => $request->input('nom_video')
        ));

        return response()->json($newVideo, 210);
    }
}