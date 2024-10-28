<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/movies-list', [MovieController::class, 'index'])->name('movies');
Route::get('/cart-list', [MovieController::class, 'movieCart'])->name('cart');
Route::post('add-to-cart', [MovieController::class, 'addMovieToCart'])->name('add-movie-to-shopping-cart');
Route::delete('/delete-cart-item', [MovieController::class, 'deleteItem'])->name('delete.cart.item');