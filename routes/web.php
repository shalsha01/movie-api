<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/movies/popular', [\App\Http\Controllers\Api\MovieController::class, 'getPopularMovies']);