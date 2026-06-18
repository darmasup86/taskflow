<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('tasks', TaskController::class);
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
