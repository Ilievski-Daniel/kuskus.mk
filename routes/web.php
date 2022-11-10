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
Route::get('/create-item',      [DashboardController::class, 'createItemView']);
Route::post('/create-item',     [DashboardController::class, 'createItem']);

// Categories routes
Route::get('/create-category',  [DashboardController::class, 'createCategoryView']);
Route::post('/create-category', [DashboardController::class, 'createCategory']);
Route::get('/list-categories',  [DashboardController::class, 'listCategories']);
Route::post('/delete-category/{category}',   [DashboardController::class, 'deleteCategory']);
Route::get('/edit-category/{category}',      [DashboardController::class, 'editCategory']);
Route::post('/update-category/{category}',   [DashboardController::class, 'updateCategory']);

