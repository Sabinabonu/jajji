<?php

use App\Http\Controllers\MainController;
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


Route::get('/', [MainController::class, 'index']);

Route::get('/class', [MainController::class, 'class'])->name('class');

Route::get('/achievements', [MainController::class, 'achievements'])->name('achievements');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/gallery', [MainController::class, 'gallery'])->name('gallery');
Route::get('/team', [MainController::class, 'team'])->name('team');


Route::post('/store', [MainController::class, 'store'])->name('store');