<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarProfilesController;
use App\Http\Controllers\OrderController;
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
Route::get("/CarProfileViews", [CarProfilesController::class,'index'])->name('CarProfileViews');
Route::get("/CarProfileViews/create", [CarProfilesController::class,'create'])->name('CarProfileViews/create');
Route::post("/CarProfileViews/create", [CarProfilesController::class,'store'])->name('CarProfileViews/create');
Route::get("/CarProfileViews/{id}/edit", [CarProfilesController::class,'edit'])->name('CarProfileViews/edit');
Route::post("/CarProfileViews/{id}/edit", [CarProfilesController::class,'update'])->name('CarProfileViews/edit');
Route::get("/CarProfileViews/{id}", [CarProfilesController::class,'show'])->name('CarProfileViews/show');
Route::get("/CarProfileViews/{id}", [CarProfilesController::class,'destroy'])->name('CarProfileViews');


Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::get('/order/create', [OrderController::class, 'createform']);
Route::post('/order/create', [OrderController::class, 'create']);
Route::get('/order/{id}/cancel', [OrderController::class, 'cancel']);
Route::get('/order/{id}/edit', [OrderController::class, 'edit']);
Route::post('/order/{id}/edit', [OrderController::class, 'update']);
Route::get('/order/{id}', [OrderController::class, 'show'])->name('order');


