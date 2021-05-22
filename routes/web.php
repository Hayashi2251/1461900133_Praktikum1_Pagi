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
    return view('home0133');
});

Route::get('/home', 'Prak1Controller@home')->name('home');
Route::get('/artikel0133', 'Prak1Controller@artikel')->name('artikel');
Route::get('/contactus', 'Prak1Controller@contactus')->name('kontakkita');