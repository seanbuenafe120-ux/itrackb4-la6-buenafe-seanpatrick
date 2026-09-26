<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    private function getMovies()
    {
        return [
            1 => ['id' => 1, 'title' => 'Inception', 'genre' => 'Sci-Fi', 'director' => 'Christopher Nolan'],
            2 => ['id' => 2, 'title' => 'Interstellar', 'genre' => 'Sci-Fi', 'director' => 'Christopher Nolan'],
            3 => ['id' => 3, 'title' => 'The Dark Knight', 'genre' => 'Action', 'director' => 'Christopher Nolan'],
            4 => ['id' => 4, 'title' => 'Pulp Fiction', 'genre' => 'Crime', 'director' => 'Quentin Tarantino'],
            5 => ['id' => 5, 'title' => 'Django Unchained', 'genre' => 'Action', 'director' => 'Quentin Tarantino'],
        ];
    }

    public function index(Request $request)
    {
        $allMovies = $this->getMovies();
        $genre = $request->query('genre');
        $director = $request->query('director');

        $movies = array_filter($allMovies, function ($movie) use ($genre, $director) {
            $matchGenre = !$genre || $movie['genre'] === $genre;
            $matchDirector = !$director || $movie['director'] === $director;
            return $matchGenre && $matchDirector;
        });

        return view('movies.index', [
            'movies' => $movies,
            'selectedGenre' => $genre,
            'selectedDirector' => $director,
        ]);
    }

    public function create()
    {
        // Empty stub
    }

    public function store(Request $request)
    {
        // Empty stub
    }

    public function show(string $id)
    {
        $movies = $this->getMovies();

        if (!isset($movies[$id])) {
            abort(404);
        }

        return view('movies.show', ['movie' => $movies[$id]]);
    }

    public function edit(string $id)
    {
        // Empty stub
    }

    public function update(Request $request, string $id)
    {
        // Empty stub
    }

    public function destroy(string $id)
    {
        // Empty stub
    }

    public function featured()
    {
        $movies = $this->getMovies();
        $featuredMovie = $movies[1];
        return view('movies.show', ['movie' => $featuredMovie]);
    }
}