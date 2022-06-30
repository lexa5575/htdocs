<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home-form');

Route::get('contact', function () {
    return view('contact');
})->name('contact-form');

Route::get('about', function () {
    return view('about');
})->name('about-form');


Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')
    ->name('contact-button');

Route::get('end', function () {
    return view('end');
})->name('end-form');;
