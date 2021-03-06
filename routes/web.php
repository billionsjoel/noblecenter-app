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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/donate', [App\Http\Controllers\HomeController::class, 'index'])->name('donate');
Route::get('/about-us', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/contact-us', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/services', [App\Http\Controllers\PagesController::class, 'services'])->name('services');
Route::get('/focus', [App\Http\Controllers\PagesController::class, 'focus'])->name('focus');
Route::get('/team', [App\Http\Controllers\PagesController::class, 'team'])->name('team');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
