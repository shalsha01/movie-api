<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieController;

Route::prefix('movies')->group(function () {
    Route::get('/popular', [MovieController::class, 'getPopularMovies']);
});

Route::get('/test', function() {
    return response()->json(['status' => 'API Working']);
});
