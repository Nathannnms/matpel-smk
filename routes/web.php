<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/pengadaan', function () {
    return view('pengadaan');
})->name('pengadaan');

Route::get('/admin', [BookController::class, 'index'])->name('admin');
Route::get('/book.create', [BookController::class, 'create'])->name('book.create'); 
Route::post('/book.store', [BookController::class, 'store'])->name('book.store');
Route::get('/book.edit', [BookController::class, 'edit'])->name('book.edit');
Route::get('/book.show', [BookController::class, 'show'])->name('book.show');
Route::get('/book.delete', [BookController::class, 'delete'])->name('book.delete');
Route::get('/book.update', [BookController::class, 'update'])->name('book.update');


?>