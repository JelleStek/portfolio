<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});

// Portfolio main
Route::get('/portfolio', function () {
    return view('portfolio');
});
//portfolio cases
Route::get('/case-portfolio', function () {
    return view('cases/portfolio');
});





Route::get('/contact', function () {
    return view('contact');
});

