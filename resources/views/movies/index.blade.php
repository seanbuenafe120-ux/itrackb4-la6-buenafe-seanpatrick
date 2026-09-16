<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movie Collection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-4">
        <h1 class="mb-3">Movie Collection</h1>
        <div class="mb-4">
            <a href="{{ route('movies.index') }}" class="btn btn-primary me-2">All Movies</a>
            <a href="{{ route('movies.featured') }}" class="btn btn-secondary me-2">Featured Movie</a>
            <a href="{{ route('movies.filter', 'Sci-Fi') }}" class="btn btn-success me-2">Sci-Fi Movies</a>
        </div>
        <p class="text-muted">Sean Patrick T. Buenafe</p>

        <table class="table table-bordered bg-white shadow-sm">
            <thead class="table-primary">
                <tr>
                    <th>No.</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Director</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                @forelse($movies as $movie)
                <tr>
                    <td>{{ $movie['id'] }}</td>
                    <td><a href="{{ route('movies.show', $movie['id']) }}">{{ $movie['title'] }}</a></td>
                    <td>{{ $movie['genre'] }}</td>
                    <td>{{ $movie['director'] }}</td>
                    <td><span class="badge bg-info text-dark">{{ $movie['year'] }}</span></td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No movies found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>