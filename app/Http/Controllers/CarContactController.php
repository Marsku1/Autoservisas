<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarProfilesController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource("/carProfile", CarProfilesController::class);
