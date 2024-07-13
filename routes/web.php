<?php

use App\Http\Controllers\GallaryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VideoGallaryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.main');
});
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::controller(GallaryController::class)->group(function () {
    Route::get('/gallary', 'viewAll')->name('gallary');
});

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
        Route::get('backend/galary', 'index')->name('galary');
        Route::post('backend/galary/store', 'store')->name('galary.store');
        Route::get('backend/galary/view', 'view')->name('galary.view');
        Route::get('backend/galary/edit/{id}', 'edit')->name('galary.edit');
        Route::post('backend/galary/update/{id}', 'update')->name('galary.update');
        Route::post('backend/galary/status/{id}', 'status')->name('galary.status');
        Route::get('backend/galary/destroy/{id}', 'destroy')->name('galary.destroy');
    });

    // Team Controller
    Route::controller(TeamController::class)->group(function () {
        Route::get('/team', 'index')->name('team');
        Route::post('/team/store', 'store')->name('team.store');
        Route::get('/team/view', 'view')->name('team.view');
        Route::get('/team/edit/{id}', 'edit')->name('team.edit');
        Route::post('/team/update/{id}', 'update')->name('team.update');
        Route::post('/team/status/{id}', 'status')->name('team.status');
        Route::get('/team/destroy/{id}', 'destroy')->name('team.destroy');
    });
    // Video Gallery Controller
    Route::controller(VideoGallaryController::class)->group(function () {
        Route::get('/video/gallery', 'index')->name('video.gallery');
        Route::post('/video/gallery/store', 'store')->name('video.gallery.store');
        Route::get('/video/gallery/view', 'view')->name('video.gallery.view');
        Route::get('/video/gallery/edit/{id}', 'edit')->name('video.gallery.edit');
        Route::post('/video/gallery/update/{id}', 'update')->name('video.gallery.update');
        Route::post('/video/gallery/status/{id}', 'status')->name('video.gallery.status');
        Route::get('/video/gallery/destroy/{id}', 'destroy')->name('video.gallery.destroy');
    });
});

require __DIR__.'/auth.php';
