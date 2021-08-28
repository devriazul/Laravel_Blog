<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;


Route::get('/', [AboutController::class, 'about']);
