<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $first_text = "questo e il mio primo testo";
    return view('home', compact('first_text'));
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route:: get ('/services', function (){
    return view ('services');
})-> name ('services');