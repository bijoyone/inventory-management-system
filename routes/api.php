<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::post('/user-registration', [UserController::class, 'userRegistration'])->name('user-registration');
