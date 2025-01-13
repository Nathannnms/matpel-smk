<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/pengadaan', function () {
    return view('pengadaan');
})->name('pengadaan');

