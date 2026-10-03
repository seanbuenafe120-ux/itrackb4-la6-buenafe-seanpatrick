<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    private function movies(): array
    {
        $path = storage_path('app/movies.json');

        return json_decode(file_get_contents($path), true);
    }

    private function saveMovies(array $movies): void
    {
        $path = storage_path('app/movies.json');

        file_put_contents(
            $path,
            json_encode($movies, JSON_PRETTY_PRINT)
        );
    }

    public function index(Request $request)
    {
        $allMovies = $this->movies();
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
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'genre' => 'required|in:Action,Comedy,Drama,Horror,Sci-Fi,Crime',
            'director' => 'required|max:100',
        ]);

        $movies = $this->movies();

        $nextId = max(array_keys($movies)) + 1;

        $movies[$nextId] = [
            'id' => $nextId,
            'title' => $validated['title'],
            'genre' => $validated['genre'],
            'director' => $validated['director'],
        ];

        $this->saveMovies($movies);

        return redirect()
            ->route('movies.index')
            ->with('success', 'Movie added successfully.');
    }

    public function show(int $id)
    {
        $movies = $this->movies();

        if (!isset($movies[$id])) {
            abort(404);
        }

        return view('movies.show', ['movie' => $movies[$id]]);
    }

    public function featured()
    {
        $movies = $this->movies();
        $movie = $movies[1] ?? reset($movies);

        return view('movies.show', ['movie' => $movie]);
    }
}