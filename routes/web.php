<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('/kebijakan-privasi', [LandingPageController::class, 'privacy'])->name('privacy');

