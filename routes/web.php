<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailingController;
use App\Http\Controllers\DashboardController;

// Landing page route
Route::get('/', function () {
    return view('index');
});

// Mailing forms routes
Route::post('/send-contact-email',     [MailingController::class, 'contactUs']);
Route::post('/send-reservation-email', [MailingController::class, 'reservation']);

// Authenticaion routes
Auth::routes();

// Dashboard routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create-category',  [DashboardController::class, 'createCategoryView']);
Route::post('/create-category', [DashboardController::class, 'createCategory']);

