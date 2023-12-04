<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function getMusicList () {
        $musicList = [
            ['id' => 1, 'title' => 'Song 1', 'artist' => 'Artist 1'],
            ['id' => 2, 'title' => 'Song 2', 'artist' => 'Artist 2'],
        ];

        return response()->json(['musicList' => $musicList], 200);
    }

    public function playMusic (Request $request) {
        $musicId = $request->get('musicId');

        return response()->json(['message' => 'Music played successfully', 'musicId' => $musicId]);
    }
}
