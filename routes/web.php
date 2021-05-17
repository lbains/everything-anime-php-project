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

Route::match(array('GET', 'POST'),'/', function () {
    return view('home');
})->name('home');

Route::match(array('GET', 'POST'),'/shounen', function () {
    return view('shounen');
})->name('shounen');

Route::match(array('GET', 'POST'),'/isekai', function () {
    return view('isekai');
})->name('isekai');

Route::match(array('GET', 'POST'),'/horror' , function () {
    return view('horror');
})->name('horror');

Route::match(array('GET', 'POST'),'/psychological', function () {
    return view('psychological');
})->name('psychological');

Route::match(array('GET', 'POST'),'/manga', function () {
    return view('manga');
})->name('manga');

Route::match(array('GET', 'POST'),'/contact', function () {
    return view('contact');
})->name('contact');



