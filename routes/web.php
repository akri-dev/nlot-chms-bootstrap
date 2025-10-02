<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::group(['middleware => auth'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('index');
});

