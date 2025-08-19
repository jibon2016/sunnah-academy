<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home.index');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // All Admin Route
    Route::middleware(['isAdmin'])->prefix('admin')->group(function () {


    });

    //All user Route
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

});

require __DIR__.'/auth.php';

Route::get('/clear', function () {
    Artisan::call('cache:forget spatie.permission.cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});

Route::get('/migrate', function (){
    Artisan::call('migrate');
    return "Migrated!";
});
