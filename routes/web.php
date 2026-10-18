<?php

use App\Http\Controllers\FurnitureController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FurnitureController::class, 'home'])->name('home');
Route::get('/produk', [FurnitureController::class, 'index'])->name('produk.index');
Route::get('/produk/{id}', [FurnitureController::class, 'show'])->name('produk.show');

Route::get('/tentang', function () {
    return view('page.tentang');
})->name('tentang');
Route::get('/kontak', function () {
    return view('page.kontak');
})->name('kontak');
