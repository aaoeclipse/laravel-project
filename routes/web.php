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

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index']);

Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');;
Route::get('/blog/create', [\App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
Route::get('/blog/{blog}', [\App\Http\Controllers\BlogController::class, 'show']);

Route::get('/profile', [\App\Http\Controllers\Profile::class, 'store'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/profile/{user}', [\App\Http\Controllers\Profile::class, 'show']);

require __DIR__ . '/auth.php';
