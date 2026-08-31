<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Movie List</title>
</head>
<body>
    <h1>My Movie List</h1>
    <p>Prepared by: Sean Patrick T. Buenafe | 2023-70372</p>

    @if($filter)
        <p>Showing items filtered by: <strong>{{ $filter }}</strong></p>
    @else
        <p>Showing all items.</p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Rating</th>
        </tr>
        @foreach ($movies as $movie)
        <tr>
            <td>
                <a href="{{ route('movies.show', ['id' => $movie['id']]) }}">
                    {{ $movie['title'] }}
                </a>
            </td>
            <td>{{ $movie['genre'] }}</td>
            <td>{{ $movie['rating'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>