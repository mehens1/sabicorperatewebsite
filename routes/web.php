<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;

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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/', [SiteController::class, 'index']);
Route::get('/blog', [SiteController::class, 'blog']);


Route::get('/login', function() { return redirect('/auth/login'); });
Route::get('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/login', [AuthController::class, 'loginPost']);
Route::get('/reset-password', function() { return redirect('/auth/reset-password'); });
Route::get('/reset', function() { return redirect('/auth/reset-password'); });
Route::get('/auth/reset-password', [AuthController::class, 'resetPassword']);
Route::get('/logout', function() { return redirect('/auth/logout'); });
Route::get('/auth/logout', [AuthController::class, 'logout']);

Route::get('/portal/dashboard', [AuthController::class, 'index']);