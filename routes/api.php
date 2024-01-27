<?php

use App\Http\Controllers\ActorAPIController;
use App\Http\Controllers\DirectorAPIController;
use App\Http\Controllers\MovieAPIController;
use App\Services\Swapi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResources([
        'movies' => MovieAPIController::class,
        'actors' => ActorAPIController::class,
        'directors' => DirectorAPIController::class,
    ]);

    Route::get('/movies/{movie}/actors', [MovieAPIController::class, 'actors'])->name('movies.actors');
    Route::get('/movies/{movie}/director', [MovieAPIController::class, 'director'])->name('movies.director');
    Route::post('/movies/{movie}/actors', [MovieAPIController::class, 'addActor'])->name('movies.actors.add');
});

Route::get('/swapi', function (Swapi $swapi) {
    // $swapi = new Swapi();
    // Ce qu'on souhaite
    // return $swapi->films()->get(); // Tous les films
    // return $swapi->films(4)->get(); // Le film avec l'ID 4
    return $swapi->starships()->page(2)->wookiee()->get();
});
