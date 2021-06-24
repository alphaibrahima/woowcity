<?php

use Illuminate\Support\Facades\Route;

Route::get ('/', function () {
    return view('pages/home');// on peut aussi mettre pages.home

})->name('home');

Route::get ('/about-us', function () {
    return view('pages/about');// on peut aussi mettre pages.about
})->name('about');