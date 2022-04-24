<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarProfilesController;
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

Route::get("/CarProfileViews/create", [CarProfilesController::class,'create'])->name('CarProfileViews/create');
Route::post("/CarProfileViews/create", [CarProfilesController::class,'store'])->name('CarProfileViews/create');
Route::get("/CarProfileViews", [CarProfilesController::class,'index'])->name('CarProfileViews');
Route::get("/CarProfileViews/edit", [CarProfilesController::class,'edit'])->name('CarProfileViews/edit');
Route::get("/CarProfileViews/show", [CarProfilesController::class,'show'])->name('CarProfileViews/show');
