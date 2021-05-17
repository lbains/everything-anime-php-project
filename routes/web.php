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

Route::match(array('GET', 'POST'),'/', 'HomeController@home')->name('home');

Route::match(array('GET', 'POST'),'/shounen', 'HomeController@shounen')->name('shounen');

Route::match(array('GET', 'POST'),'/isekai', 'HomeController@isekai')->name('isekai');

Route::match(array('GET', 'POST'),'/horror' , 'HomeController@horror')->name('horror');

Route::match(array('GET', 'POST'),'/psychological', 'HomeController@psychological')->name('psychological');

Route::match(array('GET', 'POST'),'/manga', 'HomeController@manga')->name('manga');

Route::match(array('GET', 'POST'),'/contact', 'HomeController@contact')->name('contact');



