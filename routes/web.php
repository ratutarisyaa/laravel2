<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
    "title" => "home"

    ]);
});

Route::get('/faq', function () {
    return view('faq', [
    "title" => "faq" ,
        "name" => "Ratu ayu",
        "email" => "Ratuayu@gmail.com",
        "image" => "kucing.jpg"
    ]);
});



Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",

    ]);
 
});  

Route::get('/login', function () {
    return view('login', [
        "title" => "login",
    ]);
});

