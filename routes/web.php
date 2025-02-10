<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CsvController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\EligibilityController;



Route::controller(CsvController::class)->group(function(){
    Route::get('csv', 'index');
    Route::get('csv-export', 'export')->name('csv.export');
    Route::post('csv-import', 'import')->name('csv.import');
});

Route::controller(ImportController::class)->group(function(){
    Route::get('/import', 'index')->name('import.index');
    Route::get('/verify/appt/data', 'apptDataVerify')->name('import.appt.data.verify');
    Route::get('/import/appt/data/save', 'apptDataSave')->name('import.appt.data.save');

    // Route::post('import', 'import')->name('import.create');
    Route::post('import', 'import')->name('import.eligibility.patient.create');
});

// Route::resource('eligibilities', EligibilityController::class);

Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('offices', OfficeController::class);
    Route::resource('providers', ProviderController::class);
    Route::resource('insurances', InsuranceController::class);
    Route::resource('patients', PatientController::class);

    Route::controller(PatientController::class)->group(function(){
        Route::get('/profile', 'profile')->name('patient.profile');
    });

    
    Route::get('/eligibility/index', [EligibilityController::class, 'index'])->name('eligibilities.index');
    Route::get('/eligibility/form/{patientId?}/{insuranceId?}', [EligibilityController::class, 'form'])->name('eligibilities.form');
    Route::post('/eligibility/store/{id?}', [EligibilityController::class, 'store'])->name('eligibility.store');
    Route::get('/eligibility/export', [EligibilityController::class, 'exportExcel'])->name('eligibility.export');


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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cache/clear', function() {
    $exitCode = Artisan::call('optimize:clear');
    echo "Cache Clear Done..";
    // return what you want
});

require __DIR__.'/auth.php';
require __DIR__.'/site.php'; //For website
