<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ::view is very helpfull to show static pages
Route::view('/index', 'index')->name('index');
Route::view('/home', 'landing.home')->name('home');
Route::view('/about', 'landing.about')->name('about');
Route::view('/services', 'landing.services')->name('services');
Route::view('/contact', 'landing.contact')->name('contact');
