<?php

use App\Http\Controllers\GallaryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.main');
});
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/gallary', function () {
    return view('frontend.gallary');
})->name('gallary');
Route::get('/admission', function () {
    return view('frontend.admission');
})->name('admission');

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Gallery Controller
    Route::controller(GallaryController::class)->group(function () {
        Route::get('/galary', 'index')->name('galary');
        Route::post('/galary/store', 'store')->name('galary.store');
        Route::get('/galary/view', 'view')->name('galary.view');
        Route::get('/galary/edit/{id}', 'edit')->name('galary.edit');
        Route::post('/galary/update/{id}', 'update')->name('galary.update');
        Route::post('/galary/status/{id}', 'status')->name('galary.status');
        Route::get('/galary/destroy/{id}', 'destroy')->name('galary.destroy');
    });
});

require __DIR__.'/auth.php';
