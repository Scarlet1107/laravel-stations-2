<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function movieTest()
    {
        return view('movieTest');
    }
    public function getMovies()
    {
        $movies = Movie::all();
        return view('getMovies', ['movies' => $movies]);
    }
}
