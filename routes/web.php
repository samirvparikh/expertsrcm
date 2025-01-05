<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {  return view('site.index'); });
Route::get('/about-us', function () {  return view('site.about-us'); });
Route::get('/why-choose-us', function () {  return view('site.why-choose-us'); });
Route::get('/credentialing', function () {  return view('site.credentialing'); });
Route::get('/eligibility', function () {  return view('site.eligibility'); });
Route::get('/claim-submission', function () {  return view('site.claim-submission'); });
Route::get('/payment-posting', function () {  return view('site.payment-posting'); });
Route::get('/account-receivable', function () {  return view('site.account-receivable'); });
Route::get('/adjustment-and-adjudication', function () {  return view('site.adjustment-and-adjudication'); });
Route::get('/contact-us', function () {  return view('site.contact-us'); });



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

require __DIR__.'/auth.php';
