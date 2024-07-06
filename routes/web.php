<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin_Controllers\Aboutus_Controllers\Aboutus_Controller;

    // Route::get('/', function () {
    //     return view('welcome');
    // });
    
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');
        
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/dashboard', function () {
        return view('admin_view.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    

    Route::middleware('auth')->group(function () {

        Route::get('/about_us', [Aboutus_Controller::class, 'index'])->name('about_us');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
