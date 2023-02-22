<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    //

    public function add_song(){
        $song = new Song();
        $song->name = "Song 1";
        $song->save();
    }
}
