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
    return view('home');
})->name('home');

Route::get('/shounen', function () {
    return view('shounen');
})->name('shounen');

Route::get('/isekai', function () {
    return view('isekai');
})->name('isekai');

Route::get('/horror' , function () {
    return view('horror');
})->name('horror');

Route::get('/psychological', function () {
    return view('psychological');
})->name('psychological');

Route::get('/manga', function () {
    return view('manga');
})->name('manga');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



