<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VeterinaryController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');


Route::prefix( '/blog' )->group(function(){
    Route::get('/busqueda', [PostController::class, 'search'])->name('blog.search');
    Route::get('/categoria/{category:slug}', [PostController::class, 'category'])->name('blog.category');
    Route::get('/{slug}', [PostController::class, 'show'])->name('blog.show');
});

Route::prefix( '/veterinarias' )->group(function(){
    Route::get('/{slug}', [VeterinaryController::class, 'show'])->name('veterinary.show');
});
