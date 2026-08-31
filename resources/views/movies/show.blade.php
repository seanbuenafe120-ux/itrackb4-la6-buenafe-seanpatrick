<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
</head>
<body>
    <h2>Movie Details</h2>
    <p>Prepared by: Sean Patrick T. Buenafe | 2023-70372</p>

    <p><strong>ID:</strong> {{ $movie['id'] }}</p>
    <p><strong>Title:</strong> {{ $movie['title'] }}</p>
    <p><strong>Genre:</strong> {{ $movie['genre'] }}</p>
    <p><strong>Rating:</strong> {{ $movie['rating'] }}</p>

    <br>
    <a href="{{ route('movies.index') }}">Back to Movies List</a>
</body>
</html>