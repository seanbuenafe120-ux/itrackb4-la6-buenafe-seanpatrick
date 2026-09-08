<nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('movies.index') }}">All Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('movies.index') }}?filter=Action">Filter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('movies.show', ['id' => 1]) }}">Featured</a>
            </li>
        </ul>
    </div>
</nav>