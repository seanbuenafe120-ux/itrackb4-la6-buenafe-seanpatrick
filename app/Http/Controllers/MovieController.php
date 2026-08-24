<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = [
            ['title' => 'Inception', 'genre' => 'Sci-Fi', 'rating' => '8.8'],
            ['title' => 'The Dark Knight', 'genre' => 'Action', 'rating' => '9.0'],
            ['title' => 'Interstellar', 'genre' => 'Sci-Fi', 'rating' => '8.7'],
            ['title' => 'Parasite', 'genre' => 'Thriller', 'rating' => '8.5'],
            ['title' => 'Spirited Away', 'genre' => 'Animation', 'rating' => '8.6'],
        ];

        return view('movies.index', ['movies' => $movies]);
    }
}
