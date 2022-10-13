<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ContactController;



Route::get('/', function () {
    return view('home');
})->name ('home');

Route::any('about', function () {
    return view('about');
})->name ('about');

Route::get('/contact', function () {
    return view('contact');
})->name ('contact');

Route::get('/all/{id}/delete', [ContactController::class,'deleteMessage'])->name('contact-delete');
Route::get('/all/{id}', [ContactController::class,'showOneMessage'])->name('contact-data-one');
Route::get('/all/{id}/update', [ContactController::class,'updateMessage'])->name('contact-update');
Route::post('/all/{id}/update', [ContactController::class,'updateMessageSubmit'])->name('contact-update-submit');

Route::get('/all', [ContactController::class,'AllData'])->name('contact-data');
Route::post('/contact/submit', [ContactController::class,'submit'])->name('contact-form');
