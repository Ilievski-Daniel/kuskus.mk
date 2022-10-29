<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailingController;

Route::get('/', function () {
    return view('index');
});

Route::post('/send-contact-email', [MailingController::class, 'contactUs']);