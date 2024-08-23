<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::view('/', 'home');
Route::view('about', 'about');
Route::view('gallery', 'gallery');
Route::view('events', 'events');
Route::view('events-details', 'event-details');
Route::view('program', 'program');
Route::view('playschool', 'playschool-details');
Route::view('preeschool', 'preeschool-details');
Route::view('juniorkids', 'juniorkids');
Route::view('seniorkids', 'seniorkids');
Route::view('daycare', 'daycare');
Route::view('grade-2', 'grade2');
Route::view('contact', 'contact');
Route::view('specialities', 'specialities');
Route::post('sends', [MailController::class, 'sendContactMail']);


