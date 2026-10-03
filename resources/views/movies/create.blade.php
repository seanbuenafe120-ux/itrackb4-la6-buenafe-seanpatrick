@extends('layouts.app')

@section('title', 'Add Movie')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <div class="mb-4">
            <p class="text-uppercase text-primary fw-semibold small mb-1">Movie Archive</p>
            <h2 class="mb-1">Add a New Movie</h2>
            <p class="text-muted mb-0">Complete all fields to add a movie to the archive.</p>
        </div>

        <form method="POST" action="{{ route('movies.store') }}">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Movie Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <select class="form-select @error('genre') is-invalid @enderror" name="genre" id="genre">
                    <option value="">Choose a genre</option>
                    @foreach (['Action', 'Comedy', 'Drama', 'Horror', 'Sci-Fi', 'Crime'] as $genreOption)
                        <option value="{{ $genreOption }}" @selected(old('genre') == $genreOption)>
                            {{ $genreOption }}
                        </option>
                    @endforeach
                </select>
                @error('genre')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="director" class="form-label">Director</label>
                <input type="text" class="form-control @error('director') is-invalid @enderror" name="director" id="director" value="{{ old('director') }}">
                @error('director')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save Movie</button>
            <a href="{{ route('movies.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection