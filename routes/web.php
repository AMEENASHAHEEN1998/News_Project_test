<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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


Route::view('/','site.home')->name('/');

Route::view('home','site.home');
// Route::view('/admin','dashboard.home');
// Route::get();

Auth::routes();

Route::resource('categories' , CategoryController::class);
Route::resource('blogs' , BlogController::class);

Route::get('/admin' , [HomeController::class , 'index'] )->name('name')->middleware('admin');

