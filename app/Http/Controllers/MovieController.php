<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index($genre = null)
    {
        $movies = $this->movies();
        $result = [];

        foreach ($movies as $movie) {
            if ($genre == null) {
                $result[] = $movie;
            } elseif ($movie['genre'] == $genre) {
                $result[] = $movie;
            }
        }

        return view('movies.index', [
            'movies' => $result,
            'filter' => $genre
        ]);
    }

    public function show($id = 1)
    {
        $movies = $this->movies();

        if (!isset($movies[$id])) {
            abort(404);
        }

        return view('movies.show', ['movie' => $movies[$id]]);
    }

    private function movies()
    {
        return [
            1 => ['id' => 1, 'title' => 'Inception', 'genre' => 'Sci-Fi', 'rating' => '8.8'],
            2 => ['id' => 2, 'title' => 'The Dark Knight', 'genre' => 'Action', 'rating' => '9.0'],
            3 => ['id' => 3, 'title' => 'Interstellar', 'genre' => 'Sci-Fi', 'rating' => '8.7'],
            4 => ['id' => 4, 'title' => 'Parasite', 'genre' => 'Thriller', 'rating' => '8.5'],
            5 => ['id' => 5, 'title' => 'Spirited Away', 'genre' => 'Animation', 'rating' => '8.6'],
            6 => ['id' => 6, 'title' => 'Your Name', 'genre' => 'Animation', 'rating' => '8.4'],
        ];
    }
}