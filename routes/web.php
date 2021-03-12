<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminPortfolioController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/home', [PagesController::class, 'index']);
Route::get('/tentang-kami', [PagesController::class, 'about']);
Route::get('/hubungi-kami', [ContactController::class, 'index']);
Route::post('/hubungi-kami', [ContactController::class, 'send']);

// Authenticate
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);
Route::get('/admin/logout', [AuthController::class, 'logout']);

// Dashboard
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/konten/edit/{konten_id}', [DashboardController::class, 'show']);
    Route::post('/konten/edit/{konten_id}', [DashboardController::class, 'update']);
    Route::get('/portfolio', [AdminPortfolioController::class, 'index']);
    Route::get('/portfolio/add', [AdminPortfolioController::class, 'add']);
    Route::post('/portfolio/add', [AdminPortfolioController::class, 'store']);
    Route::get('/portfolio/edit/{portfolio_id}', [AdminPortfolioController::class, 'edit']);
    Route::post('/portfolio/edit/{portfolio_id}', [AdminPortfolioController::class, 'update']);
    Route::delete('/portfolio/delete/{portfolio_id}', [AdminPortfolioController::class, 'delete']);
    Route::get('/pengguna', [AdminUserController::class, 'index']);
    Route::delete('/pengguna/delete/{user_id}', [AdminUserController::class, 'delete']);
});
