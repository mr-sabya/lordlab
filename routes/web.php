<?php

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

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::get('about', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');
Route::get('portfolio', [App\Http\Controllers\Frontend\PortfolioController::class, 'index'])->name('portfolio');
Route::get('blog', [App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('blog.index');
Route::get('contact', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');