<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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
    Route::get('/{slug}', [PostController::class, 'show'])->name('blog.show');
});

