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

Route::name('admin.')->group(function () {

    Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('dashboard');

    Route::prefix('portfolio')->group(function () {
        Route::get('category', [App\Http\Controllers\Backend\Portfolio\CategoryController::class, 'index'])->name('portfolio.category.index');
    });
    
    Route::prefix('media')->group(function () {
        Route::get('image', [App\Http\Controllers\Backend\MediaController::class, 'image'])->name('media.image.index');
    });
});
