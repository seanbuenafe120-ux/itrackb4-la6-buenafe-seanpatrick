@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="card p-4 mb-4 shadow-sm border-0">
        <h2 class="text-primary fw-bold mb-1">Movie Vault Portal - INHERITANCE TEST</h2>
        <p class="text-muted mb-0">Prepared by: Sean Patrick T. Buenafe | Block 4C</p>
    </div>

    <div class="card p-4 shadow-sm border-0">
        <h3 class="fw-bold mb-3">Movies List</h3>

        
        <div class="card p-3 bg-light mb-3 border-0">
            <div class="d-flex align-items-center">
                <span class="fw-bold me-2">Active Filters:</span>
                <span class="badge bg-primary me-2">Genre: {{ $selectedGenre ?? 'All' }}</span>
                <span class="badge bg-secondary">Director: {{ $selectedDirector ?? 'All' }}</span>
            </div>
        </div>
      
        <div class="row mb-4">
            <div class="col-md-6 mb-2">
                <label class="fw-bold d-block mb-1">Filter by Genre:</label>
                <a href="{{ route('movies.index', ['genre' => 'Sci-Fi', 'director' => $selectedDirector]) }}" 
                   class="btn btn-sm {{ $selectedGenre === 'Sci-Fi' ? 'btn-primary' : 'btn-outline-primary' }}">Sci-Fi</a>
                <a href="{{ route('movies.index', ['genre' => 'Action', 'director' => $selectedDirector]) }}" 
                   class="btn btn-sm {{ $selectedGenre === 'Action' ? 'btn-primary' : 'btn-outline-primary' }}">Action</a>
                <a href="{{ route('movies.index', ['genre' => 'Crime', 'director' => $selectedDirector]) }}" 
                   class="btn btn-sm {{ $selectedGenre === 'Crime' ? 'btn-primary' : 'btn-outline-primary' }}">Crime</a>
            </div>
            
            <div class="col-md-6 mb-2">
                <label class="fw-bold d-block mb-1">Filter by Director:</label>
                <a href="{{ route('movies.index', ['genre' => $selectedGenre, 'director' => 'Christopher Nolan']) }}" 
                   class="btn btn-sm {{ $selectedDirector === 'Christopher Nolan' ? 'btn-secondary' : 'btn-outline-secondary' }}">Christopher Nolan</a>
                <a href="{{ route('movies.index', ['genre' => $selectedGenre, 'director' => 'Quentin Tarantino']) }}" 
                   class="btn btn-sm {{ $selectedDirector === 'Quentin Tarantino' ? 'btn-secondary' : 'btn-outline-secondary' }}">Quentin Tarantino</a>
            </div>
        </div>

        @if($selectedGenre || $selectedDirector)
            <div class="mb-3">
                <a href="{{ route('movies.index') }}" class="btn btn-sm btn-danger">Clear All Filters</a>
            </div>
        @endif

        <!-- Table -->
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th style="width: 50px;">#</th>
                    <th>Title</th>
                    <th>Director</th>
                    <th>Genre</th>
                </tr>
            </thead>
            <tbody>
                @forelse($movies as $movie)
                    <tr>
                        <td class="fw-bold">{{ $movie['id'] }}</td>
                        <td>
                            <a href="{{ route('movies.show', $movie['id']) }}" class="fw-bold text-decoration-none">
                                {{ $movie['title'] }}
                            </a>
                        </td>
                        <td>{{ $movie['director'] }}</td>
                        <td><span class="badge bg-secondary">{{ $movie['genre'] }}</span></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">No movies found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection