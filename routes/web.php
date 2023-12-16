<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'index']) -> name('home');
Route::get('/artikel', [MainController::class, 'article']) -> name('artikel');
Route::get('/events', [MainController::class, 'events']) -> name('events');
Route::get('/produk', [MainController::class, 'product']) -> name('produk');
Route::get('/profile', [MainController::class, 'profile']) -> name('profile');
Route::get('/login', [MainController::class, 'login']) -> name('login');
Route::get('/register', [MainController::class, 'register']) -> name('register');
Route::get('/contact', [MainController::class, 'contact']) -> name('contact');

