<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home-page');
})->name('home');

Route::get('/zona-belajar', function () {
    return view('pages.zona-belajar');
})->name('zona-belajar');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');