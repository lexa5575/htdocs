<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home-form');

Route::get('contact', function () {
    return view('contact');
})->name('contact-place');

Route::get('about', function () {
    return view('about');
})->name('about-form');

Route::post('/contact/submit', function (){
    return "Okey";
})->name('contact-form');
