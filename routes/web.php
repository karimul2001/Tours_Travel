<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResortController;
use App\Http\Controllers\TourCategoryController;
use App\Http\Controllers\TourPackageController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.layouts.master');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//admin login & logout

Route::middleware('guest:admin')->prefix('admin')->group(function () {

    Route::get('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'store']);

    //Route::get('register', [App\Http\Controllers\Auth\Admin\RegisterController::class, 'create'])->name('admin.register');
    //Route::post('register', [App\Http\Controllers\Auth\Admin\RegisterController::class, 'store']);
});

Route::middleware('auth:admin')->prefix('admin')->group(function () {

    Route::post('logout', [App\Http\Controllers\Auth\Admin\LoginController::class, 'destroy'])->name('admin.logout');

    Route::view('/dashboard', 'backend.admin_dashboard');
    Route::resource('tour_category', TourCategoryController::class);
    Route::resource('tour_package', TourPackageController::class);
    Route::resource('resorts', ResortController::class);
});

require __DIR__ . '/auth.php';
