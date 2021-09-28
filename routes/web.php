<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;

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

Auth::routes();

Route::get('/',[frontController::class,'index']);
Route::get('/search',[frontController::class,'search']);
Route::get('/contactus',[frontController::class,'contactuss']);
Route::get('/aboutus',[frontController::class,'aboutus']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
