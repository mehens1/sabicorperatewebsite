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
Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::post('/contact', [SiteController::class, 'contactForm'])->name('contactForm');
Route::get('/team/{id}', [SiteController::class, 'team'])->name('team');