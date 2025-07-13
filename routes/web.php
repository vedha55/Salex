<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Landing page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Newsletter subscription
Route::post('/subscribe', [HomeController::class, 'subscribe'])->name('subscribe');

// Demo request
Route::post('/demo-request', [HomeController::class, 'requestDemo'])->name('demo.request');

// Contact form
Route::post('/contact', [HomeController::class, 'contact'])->name('contact');

// Placeholder routes for navigation links
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/trial', function () {
    return redirect('/')->with('message', 'Start your free trial by signing up below!');
})->name('trial');

// API routes for AJAX requests
Route::prefix('api')->group(function () {
    Route::post('/subscribe', [HomeController::class, 'subscribe']);
    Route::post('/demo-request', [HomeController::class, 'requestDemo']);
    Route::post('/contact', [HomeController::class, 'contact']);
});