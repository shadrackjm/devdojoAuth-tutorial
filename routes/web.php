<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/home',[AdminController::class,'loadAdminHome'])->middleware('admin');
Route::get('/user/home',[UserController::class,'loadUserHome'])->middleware('user');