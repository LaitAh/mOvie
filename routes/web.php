<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Models\Argument;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('index');

Route::post('/newsletter', [MainController::class, 'newsletter'])->name('newsletter');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/api-keys', [HomeController::class, 'apiKeys'])->name('api-keys');
Route::post('/api-keys', [HomeController::class, 'setApiKey'])->name('api-key.generate');
Route::delete('/api-keys', [HomeController::class, 'removeApiKey'])->name('api-key.remove');
