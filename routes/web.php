<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;


Route::get('/', function () {
    return view('index');
});

// Save message
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// PIN page
Route::get('/mailbox', function() {
    return view('pin');
})->name('contact.pin');

// Verify PIN
Route::post('/mailbox/verify', [ContactController::class, 'verifyPin'])->name('contact.verify');

// Show inbox
Route::get('/mailbox/inbox', [ContactController::class, 'inbox'])->name('contact.inbox');

// Lock mailbox
Route::get('/mailbox/logout', [ContactController::class, 'logout'])->name('contact.logout');

Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');


