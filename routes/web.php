<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [\App\Http\Controllers\SiteController::class, 'home']);

Route::get('/contact', [\App\Http\Controllers\SiteController::class, 'about']);

Route::get('/about', [\App\Http\Controllers\SiteController::class, 'about']);

Route::get('/{firstName}/{middleName}/{lastName}', [\App\Http\Controllers\SiteController::class, 'myName']);
