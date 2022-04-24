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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders');
Route::get('/order/create', [App\Http\Controllers\OrderController::class, 'createform']);
Route::post('/order/create', [App\Http\Controllers\OrderController::class, 'create']);
Route::get('/order/{id}/cancel', [App\Http\Controllers\OrderController::class, 'cancel']);
Route::get('/order/{id}/edit', [App\Http\Controllers\OrderController::class, 'edit']);
Route::post('/order/{id}/edit', [App\Http\Controllers\OrderController::class, 'update']);
Route::get('/order/{id}', [App\Http\Controllers\OrderController::class, 'show'])->name('order');


