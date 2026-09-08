@extends('layouts.app')

@section('title', $movie['title'])

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>{{ $movie['title'] }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Genre:</strong> {{ $movie['genre'] }}</p>
            <p><strong>Rating:</strong> {{ $movie['rating'] }}</p>
            <a href="{{ route('movies.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection