<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

// Home Page
Route::get('/', function () {
    return view('index');
});

// Contact Page (links only: Fiverr, Upwork, Facebook, Instagram, LinkedIn)
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

// Project details
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');
