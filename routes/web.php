<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SiteController;

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



Route::get('/' , [SiteController::class , 'home'])->name('home');
Route::get('home' , [SiteController::class , 'home'])->name('home');
Route::get('aboutas' , [SiteController::class , 'aboutas'])->name('aboutas');
Route::get('newsCategory' , [SiteController::class , 'newsCategory'])->name('newsCategory');
Route::get('blog/{id}' , [SiteController::class , 'blog'])->name('blog');

// Route::view('/admin','dashboard.home');
// Route::get();

Auth::routes();

Route::resource('categories' , CategoryController::class);
Route::resource('blogs' , BlogController::class);

Route::get('/admin' , [HomeController::class , 'index'] )->name('name')->middleware('admin');
Route::view('/newHome' , 'site.newHome');
