<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'home');

// Route::controller(JobController::class)->group(function () {
//     Route::post('/jobs', 'store');
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });
// OR
Route::resource('jobs', JobController::class);

Route::view('/contact', 'contact');

//Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::get('/login', [SessionController::class, 'store']);
