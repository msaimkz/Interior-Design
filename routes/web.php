<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminMailController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminSupportController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ShapeController;
use App\Http\Controllers\Admin\SubCategoryController;
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

// Admin Profile Routes
Route::get('/Admin/Dashboard/My-Profile',[AdminProfileController::class,'profile'])->name('Admin.profile');


// Admin Setting Routes
Route::get('/Admin/Dashboard/Setting',[AdminSettingController::class,'index'])->name('Admin.setting');


// Admin Mail Routes
Route::get('/Admin/Dashboard/All-Mails',[AdminMailController::class,'index'])->name('Admin.mail');



// Admin Support Routes
Route::get('/Admin/Dashboard/Support',[AdminSupportController::class,'index'])->name('Admin.support');



// Admin Category Routes
Route::get('/Admin/Dashboard/All-Categories',[CategoryController::class,'index'])->name('Admin.category');
Route::get('/Admin/Dashboard/Create-Category',[CategoryController::class,'create'])->name('Admin.category.create');
Route::get('/Admin/Dashboard/Edit-Category',[CategoryController::class,'edit'])->name('Admin.category.edit');
Route::get('/Admin/Dashboard/Category-Detail',[CategoryController::class,'show'])->name('Admin.category.show');




// Admin Sub-Category Routes
Route::get('/Admin/Dashboard/All-Sub-Categories',[SubCategoryController::class,'index'])->name('Admin.Subcategory');
Route::get('/Admin/Dashboard/Create-Sub-Category',[SubCategoryController::class,'create'])->name('Admin.Subcategory.create');
Route::get('/Admin/Dashboard/Edit-Sub-Category',[SubCategoryController::class,'edit'])->name('Admin.Subcategory.edit');
Route::get('/Admin/Dashboard/Sub-Category-Detail',[SubCategoryController::class,'show'])->name('Admin.Subcategory.show');


// Admin Brand Routes
Route::get('/Admin/Dashboard/All-Brands',[BrandController::class,'index'])->name('Admin.brand');
Route::get('/Admin/Dashboard/Create-Brand',[BrandController::class,'create'])->name('Admin.brand.create');
Route::get('/Admin/Dashboard/Edit-Brand',[BrandController::class,'edit'])->name('Admin.brand.edit');
Route::get('/Admin/Dashboard/Brand-Detail',[BrandController::class,'show'])->name('Admin.brand.show');



// Admin Shape Routes
Route::get('/Admin/Dashboard/All-Shapes',[ShapeController::class,'index'])->name('Admin.shape');
Route::get('/Admin/Dashboard/Create-Shape',[ShapeController::class,'create'])->name('Admin.shape.create');
Route::get('/Admin/Dashboard/Edit-Shape',[ShapeController::class,'edit'])->name('Admin.shape.edit');
