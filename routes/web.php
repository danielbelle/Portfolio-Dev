<?php

use App\View\Components\Contact;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::post('contact', [Contact::class, 'submitForm']);
