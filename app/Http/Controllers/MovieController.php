<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    private function movies(): array
    {
        return [
            1 => ['id' => 1, 'title' => 'Inception', 'genre' => 'Sci-Fi', 'director' => 'Christopher Nolan', 'year' => 2010],
            2 => ['id' => 2, 'title' => 'Interstellar', 'genre' => 'Sci-Fi', 'director' => 'Christopher Nolan', 'year' => 2014],
            3 => ['id' => 3, 'title' => 'The Dark Knight', 'genre' => 'Action', 'director' => 'Christopher Nolan', 'year' => 2008],
            4 => ['id' => 4, 'title' => 'Pulp Fiction', 'genre' => 'Crime', 'director' => 'Quentin Tarantino', 'year' => 1994],
            5 => ['id' => 5, 'title' => 'The Matrix', 'genre' => 'Sci-Fi', 'director' => 'Lana Wachowski, Lilly Wachowski', 'year' => 1999],
            6 => ['id' => 6, 'title' => 'Parasite', 'genre' => 'Thriller', 'director' => 'Bong Joon-ho', 'year' => 2019],
        ];
    }

    public function index()
    {
        return view('movies.index', [
            'movies' => $this->movies(),
        ]);
    }

    public function create()
    {
        abort(404);
    }

    public function store(Request $request)
    {
        
    }

    public function show(int $id)
    {
        $movies = $this->movies();

        if (!isset($movies[$id])) {
            abort(404);
        }

        return view('movies.show', [
            'movie' => $movies[$id],
        ]);
    }

    public function edit(int $id)
    {
        
    }

    public function update(Request $request, int $id)
    {
      
    }

    public function destroy(int $id)
    {
      
    }

    public function featured()
    {
        $movies = $this->movies();

        return view('movies.featured', [
            'movie' => $movies[1],
        ]);
    }

    public function filter(?string $genre = null)
    {
        $movies = $this->movies();

        if ($genre !== null && $genre !== '') {
            $movies = array_filter(
                $movies,
                fn (array $movie): bool => strcasecmp($movie['genre'], $genre) === 0
            );
        }

        return view('movies.index', [
            'movies' => $movies,
        ]);
    }
}