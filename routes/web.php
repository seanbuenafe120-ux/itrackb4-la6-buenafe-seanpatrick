<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;



Route::get('/whoami', function () {
    return 'Sean Patrick T. Buenafe | 2023-70372 | Block 4C | ITRACKB4 Laravel 12';
});

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');

Route::get('/movies/filter/{genre?}', [MovieController::class, 'index'])->name('movies.filter');

Route::get('/movies/featured', [MovieController::class, 'show'])->name('movies.featured');

Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
