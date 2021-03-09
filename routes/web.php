<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

// Authenticate
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);

// Dashboard
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/konten/edit/{konten_id}', [DashboardController::class, 'show']);
    Route::post('/konten/edit/{konten_id}', [DashboardController::class, 'update']);
});
