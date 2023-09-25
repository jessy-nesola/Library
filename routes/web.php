<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'homepage'])
  ->name('homepage');

Route::get('/profile', [PageController::class, 'profile'])
  ->name('profile')
  ->middleware('auth');

// Route::get('/libri', [BookController::class, 'index'])
//   ->name('books.index');

// Route::get('/libri/create', [BookController::class, 'create'])
//   ->name('books.create');

// Route::post('/libri/store', [BookController::class, 'store'])
//   ->name('books.store');

// Route::get('/libri/{book}/dettagli', [BookController::class, 'show'])
//   ->name('books.show');

//   Route::get('/libri/{book}/modifica', [BookController::class, 'edit'])
//   ->name('books.edit');

//   Route::put('/libri{book}/update', [BookController::class, 'update'])
//   ->name('books.update');

//   Route::delete('/libri{book}/elimina', [BookController::class, 'destroy'])
//   ->name('books.destroy');

Route::resource('books' , BookController::class);
Route::resource('authors', AuthorController::class);