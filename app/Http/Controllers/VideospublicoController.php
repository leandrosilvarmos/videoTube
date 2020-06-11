<?php

namespace App\Http\Controllers;

use App\Videos;
use Illuminate\Http\Request;

class VideospublicoController extends Controller
{
    //

    public function indexnotAuth()
    {
        //
        return view('videos.index2')->with('videos' , Videos::all());
    }
}
