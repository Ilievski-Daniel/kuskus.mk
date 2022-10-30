<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailingController;

Route::get('/', function () {
    return view('index');
});

Route::post('/send-contact-email', [MailingController::class, 'contactUs']);
Route::post('/send-reservation-email', [MailingController::class, 'reservation']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
