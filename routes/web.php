<?php

use App\Http\Controllers\MovieController;
use App\Models\Movie;
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

Route::get('/', [MovieController::class, 'index'])->name('movies.index');

Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');

Route::get('/movies/{movie}/edit', [MovieController::class, 'edit']);

Route::get('/movies/{movie}', [MovieController::class, 'show']);

Route::put('/movies/{movie}', [MovieController::class, 'update']);

Route::post('/movies', [MovieController::class, 'store']);

Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);
