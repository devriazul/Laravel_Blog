<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use Illuminate\Routing\RouteGroup;

//Simple route

Route::get('/', [SiteController::class, 'home']);

Route::get('/contact', [SiteController::class, 'contact']);

Route::get('/about', [SiteController::class, 'about']);

// Parameter

Route::get('/{profileName}', [SiteController::class, 'profileName']);

// Multi parameter route

Route::get('/{firstName}/{middleName}/{lastName}', [SiteController::class, 'myName']);

// Group Route

Route::group(['prefix' => 'accounts'], function () {



    Route::get('/profile', function () {
        return "Profile";
    });

    Route::get('/login', function () {
        return "Login";
    });

    Route::get('/signup', function () {
        return "SignUp";
    });
    Route::get('/update', function () {
        return "Update";
    });
});
