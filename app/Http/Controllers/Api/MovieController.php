<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    public function getPopularMovies()
{
    $apiKey = env('TMDB_API_KEY');
    $response = Http::get("https://api.themoviedb.org/3/movie/popular?api_key={$apiKey}");

    // Debugging
    dd($response->json());

    if ($response->successful()) {
        return response()->json($response->json(), 200);
    }

    return response()->json(['error' => 'Failed to fetch movies'], 500);
}

}
