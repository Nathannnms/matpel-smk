<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', [BookController::class, 'home'])->name('home');

Route::get('/pengadaan', function () {
    return view('pengadaan');
})->name('pengadaan');

Route::get('/admin', [BookController::class, 'index'])->name('admin');
Route::get('/book.create', [BookController::class, 'create'])->name('book.create'); 
Route::post('/book.store', [BookController::class, 'store'])->name('book.store');
Route::put('/book.edit', [BookController::class, 'edit'])->name('book.edit');
Route::get('/book.show', [BookController::class, 'show'])->name('book.show');
Route::delete('/book.delete/{book}', [BookController::class, 'destroy'])->name('book.delete');
Route::get('/book.update/{book}', [BookController::class, 'update'])->name('book.update');
Route::resource('book', BookController::class);

?>