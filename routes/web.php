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
});
Route::get('/tentang-kami', function() {
    return view('tentang');
});
Route::get('/portfolio', function() {
    return view('portfolio');
});
Route::get('/hubungi-kami', function() {
    return view('hubungi_kami');
});
