<?php

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route to redirect to Google's OAuth page
Route::get('/auth/google/redirect',[GoogleAuthController::class,'redirect'])->name('auth.google.redirect');

// Route to handle the callback from Google
Route::get('/auth/google/callback',[GoogleAuthController::class,'callback'])->name('auth.google.callback');

// Route to the dashboard
Route::get('dashboard', function () {
    return view('/dashboard');
})->middleware('auth')->name('dashboard');
