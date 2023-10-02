<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [TestController::class, 'index']);
Route::get('/users/{id}', [TestController::class, 'getUserData']);
