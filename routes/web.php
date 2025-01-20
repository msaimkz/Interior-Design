<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



// Admin Routes

Route::get('/Admin/Dashboard/Sale-Overview',[AdminController::class,'index'])->name('Admin.dashboard.index');
Route::get('/Admin/Dashboard/User-Analytics',[AdminController::class,'user'])->name('Admin.dashboard.user');
Route::get('/Admin/Dashboard/Products-Analytics',[AdminController::class,'sale'])->name('Admin.dashboard.sale');