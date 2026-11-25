<?php

use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $latestNews =  News::published()
        ->orderByDesc('published_at')
        ->orderByDesc('id')
        ->limit(5)
        ->get();

    return view('home', compact('latestNews'));
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

Route::get('/news/{slug}', function (string $slug) {
    $news = News::where('slug', $slug)->firstOrFail();
    return view('news.show', compact('news'));
})->name('news.show');
