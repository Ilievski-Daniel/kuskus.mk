<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;


// Landing page route
Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('index');
// Route::get('/', function () {
//     return view('index');
// });

// Mailing forms routes
Route::post('/send-contact-email',     [MailingController::class, 'contactUs']);
Route::post('/send-reservation-email', [MailingController::class, 'reservation']);

// Authenticaion routes
Auth::routes();

// Dashboard routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create-category',  [DashboardController::class, 'createCategoryView']);
Route::post('/create-category', [DashboardController::class, 'createCategory']);
Route::get('/create-item',  [DashboardController::class, 'createItemView']);
Route::post('/create-item', [DashboardController::class, 'createItem']);


