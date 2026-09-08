@extends('layouts.app')

@section('title', $filter ? 'Filtered Movies' : 'All Movies')

@section('content')
    @if($filter)
        <p>Showing items filtered by: <strong>{{ $filter }}</strong></p>
    @else
        <p>Showing all items.</p>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Genre</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
            <tr>
                <td>
                    <a href="{{ route('movies.show', ['id' => $movie['id']]) }}">
                        {{ $movie['title'] }}
                    </a>
                </td>
                <td>{{ $movie['genre'] }}</td>
                <td>{{ $movie['rating'] }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3"><b>No Movie Found: {{ $filter }}</b></td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection