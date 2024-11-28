<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AllocateController;
use App\Http\Controllers\OccupantsController;
use App\Http\Controllers\SettingsController;

// Correct route group
Route::get('/', function () {
    return redirect('/adminlogin');
});

Route::get('/dashboard', function () {
    return view('dashboard'); })->name('dashboard');

Route::get('/occupants', [OccupantsController::class, 'index'])->name('occupants.index');

Route::get('/adminlogin', [LoginController::class, 'showLoginForm'])->name('adminlogin');
Route::post('/adminlogin', [LoginController::class, 'adminlogin'])->name('admin.login');


// Route::middleware('auth')->group(function () {
    // Display the list of allocations (allocate.blade.php)
    Route::get('/allocations', [AllocateController::class, 'index'])->name('allocate.index');

    // Show form to create a new allocation (used in the modal)
    Route::post('/allocate', [AllocateController::class, 'store'])->name('allocate.store');

    // Update existing allocation (called via AJAX in the modal)
    Route::put('/allocate/{id}', [AllocateController::class, 'update'])->name('allocate.update');

    // Delete allocation
    Route::delete('/allocate/{id}', [AllocateController::class, 'destroy'])->name('allocate.destroy');

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
Route::post('/settings/profile-picture', [SettingsController::class, 'updateProfilePicture'])->name('settings.update.profile-picture');


