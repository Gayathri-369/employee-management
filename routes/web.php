<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/', function() {
    return 'Hello from Laravel';
});

Route::get('/', function () {
    return view('home');  // This will load the 'home' view
});


Route::get('about', function() {
    return 'About Us';
});

Route::get('contact', function () {
    return view('contact');
});


