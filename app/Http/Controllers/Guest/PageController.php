<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        // recupera i record del database
        $movie = Movie::All(); // SELECT * FROM MOVIE

        // passa i record alla view
        return view('welcome', compact('movie'));

    }

}
