<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('movies.index') }}">Movie Vault</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link {{ request()->is('movies*') ? 'active text-warning fw-bold' : '' }}" href="{{ route('movies.index') }}">Movies Library</a>
            <a class="nav-link" href="{{ route('movies.show', 1) }}">Featured</a>
        </div>
    </div>
</nav>