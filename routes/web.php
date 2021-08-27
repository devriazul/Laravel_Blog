<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;



Route::get('/', [SiteController::class, 'home']);

Route::get('/contact', [SiteController::class, 'contact']);

Route::get('/about', [SiteController::class, 'about']);

Route::get('/{profileName}', [SiteController::class, 'profileName']);

Route::get('/{firstName}/{middleName}/{lastName}', [SiteController::class, 'myName']);
