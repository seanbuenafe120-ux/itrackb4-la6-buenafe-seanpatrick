<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $movie['title'] }} - Movie Details</title>
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

        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <small class="text-uppercase text-primary fw-bold">Movie Detail</small>
                <h2 class="mb-0">{{ $movie['title'] }}</h2>
                <small class="text-muted">Complete information for movie ID {{ $movie['id'] }}.</small>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-3">
                        <div class="border rounded p-3 bg-light">
                            <small class="text-muted d-block">ID</small>
                            <strong>{{ $movie['id'] }}</strong>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border rounded p-3 bg-light">
                            <small class="text-muted d-block">Genre</small>
                            <strong>{{ $movie['genre'] }}</strong>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border rounded p-3 bg-light">
                            <small class="text-muted d-block">Director</small>
                            <strong>{{ $movie['director'] }}</strong>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border rounded p-3 bg-light">
                            <small class="text-muted d-block">Release Year</small>
                            <strong>{{ $movie['year'] }}</strong>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="{{ route('movies.index') }}" class="btn btn-primary me-2">Back to all movies</a>
                    <a href="{{ route('movies.featured') }}" class="btn btn-outline-secondary">Featured page</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>