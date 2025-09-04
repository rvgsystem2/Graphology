<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\RoleController;

use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

// FRONTEND-ROUTES::::::::;
Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/service', [HomeController::class, 'service'])->name('frontend.service');
Route::get('/graphology', [HomeController::class, 'graphology'])->name('frontend.graphology');
Route::get('/handwriting', [HomeController::class, 'handwriting'])->name('frontend.handwriting');
Route::get('/wristwatch', [HomeController::class, 'wristwatch'])->name('frontend.wristwatch');
Route::get('/consultation', [HomeController::class, 'consultation'])->name('frontend.consultation');
Route::get('/grapho_remedy', [HomeController::class, 'grapho_remedy'])->name('frontend.grapho_remedy');
Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('frontend.privacy');
Route::get('/shipping', [HomeController::class, 'shipping'])->name('frontend.shipping');
Route::get('/return', [HomeController::class, 'return'])->name('frontend.return');
Route::get('/terms', [HomeController::class, 'terms'])->name('frontend.terms');
Route::get('/blog', [HomeController::class, 'blog'])->name('frontend.blog');

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth','verified'])->name('dashboard');




// Routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Permission Routes
    Route::get('permission/index',[PermissionController::class,'index'])->name('permission.index');
    Route::get('permission/create',[PermissionController::class,'create'])->name('permission.create');
    Route::post('permission/store',[PermissionController::class,'store'])->name('permission.store');
    Route::get('permission/edit/{permission}',[PermissionController::class,'edit'])->name('permission.edit');
    Route::post('permission/update/{permission}',[PermissionController::class,'update'])->name('permission.update');
    Route::get('permission/delete/{permission}',[PermissionController::class,'delete'])->name('permission.delete');

    // Role Routes
    Route::get('role/index',[RoleController::class,'index'])->name('role.index');
    Route::get('role/create',[RoleController::class,'create'])->name('role.create');
    Route::post('role/store',[RoleController::class,'store'])->name('role.store');
    Route::get('role/edit/{role}',[RoleController::class,'edit'])->name('role.edit');
    Route::post('role/update/{role}',[RoleController::class,'update'])->name('role.update');
    Route::get('role/delete/{role}',[RoleController::class,'delete'])->name('role.delete');

    // User Routes
    Route::get('user/index',[UserController::class,'index'])->name('user.index');
    Route::get('user/create',[UserController::class,'create'])->name('user.create');
    Route::post('user/store',[UserController::class,'store'])->name('user.store');
    Route::get('user/edit/{user}',[UserController::class,'edit'])->name('user.edit');
    Route::post('user/update/{user}',[UserController::class,'update'])->name('user.update');
    Route::get('user/delete/{user}',[UserController::class,'delete'])->name('user.delete');
    Route::get('/user/permissions/{user}', [UserController::class, 'assignPermissionForm'])->name('user.permission.form');
    Route::post('/user/permissions/{user}', [UserController::class, 'assignPermissionToUser'])->name('user.assign-permission');






});

require __DIR__.'/auth.php';
