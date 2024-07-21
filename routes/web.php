<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;



Route::view('/', 'home');

Route::view('/training-projects', 'training.index');

Route::get('/training-projects/profile-cards', [ProfileController::class, 'index']);
Route::get('/training-projects/add-to-cart', [ProductController::class, 'index']);
Route::view('/training-projects/mobile-navigation', 'training.mobile-navigation.index');

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::post('/jobs', 'store')->middleware('auth');
    Route::get('/jobs/{job}', 'show');
    Route::get('/jobs/{job}/edit', 'edit')
        ->middleware('auth')
        ->can('edit', 'job');
    Route::patch('/jobs/{job}', 'update')
        ->middleware('auth')
        ->can('edit', 'job');
    Route::delete('/jobs/{job}', 'destroy')
        ->middleware('auth')
        ->can('edit', 'job');
});
// OR
// Route::resource('jobs', JobController::class);

Route::view('/contact', 'contact');

//Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
