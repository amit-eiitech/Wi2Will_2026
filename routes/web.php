<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/philosophy', function () {
    return view('philosophy');
})->name('philosophy');

Route::get('/business', function () {
    return view('business');
})->name('business');

Route::get('/company-profile', function () {
    return view('company-profile');
})->name('company-profile');

Route::get('/recruit', function () {
    return view('recruit');
})->name('recruit');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
