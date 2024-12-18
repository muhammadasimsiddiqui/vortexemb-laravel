<?php
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/embroidery-digitizing', function () {
    return view('frontend.embroidery');
})->name('embroidery');

Route::get('/vector-conversion', function () {
    return view('frontend.vector');
})->name('vector');

Route::get('/portfolio', function () {
    return view('frontend.portfolio');
})->name('portfolio');

Route::get('/pricing', function () {
    return view('frontend.pricing');
})->name('pricing');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/order-now', function () {
    return view('frontend.order');
})->name('order');

Route::get('/get-inquiry', function () {
    return view('frontend.inquiry');
})->name('inquiry');
