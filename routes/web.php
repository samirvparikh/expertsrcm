<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OfficeController;


Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('offices', OfficeController::class);
});






Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

});

Route::get('/cache/clear', function() {
    $exitCode = Artisan::call('optimize:clear');
    echo "Cache Clear Done..";
    // return what you want
});

require __DIR__.'/auth.php';
require __DIR__.'/site.php';
