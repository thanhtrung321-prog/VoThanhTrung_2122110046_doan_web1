<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as ControllersHomeController;

Route::get('/', [ControllersHomeController::class, 'index']);
