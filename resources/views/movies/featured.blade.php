<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Featured Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-4">
        <h1 class="mb-3">Movie Collection</h1>
        <div class="mb-4">
            <a href="{{ route('movies.index') }}" class="btn btn-primary me-2">All Movies</a>
            <a href="{{ route('movies.featured') }}" class="btn btn-secondary me-2">Featured Movie</a>
        </div>
        <p class="text-muted">Sean Patrick T. Buenafe</p>

        <div class="card shadow-sm border-warning">
            <div class="card-header bg-warning text-dark">
                <small class="text-uppercase fw-bold">Featured Selection</small>
                <h2 class="mb-0">{{ $movie['title'] }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Genre:</strong> {{ $movie['genre'] }}</p>
                <p><strong>Director:</strong> {{ $movie['director'] }}</p>
                <p><strong>Year:</strong> {{ $movie['year'] }}</p>
                <a href="{{ route('movies.index') }}" class="btn btn-primary">Back to All Movies</a>
            </div>
        </div>
    </div>
</body>
</html>