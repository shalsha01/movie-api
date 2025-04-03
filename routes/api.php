<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieController;

// API Routes
Route::prefix('movies')->group(function () {
    // get popular movies
    Route::get('/popular', [MovieController::class, 'getPopularMovies']);

    // get movie details by id
    Route::get('/{id}', [MovieController::class, 'getMovieDetails']);

    // search movies 
    Route::get('/search', [MovieController::class, 'searchMovies']);

    // (Upcoming moveies) 
    Route::get('/upcoming', [MovieController::class, 'getUpcomingMovies']);
});
