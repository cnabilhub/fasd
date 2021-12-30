<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

// Dashboard

Route::view('/', 'dashboard')
    ->middleware(['auth'])->name('dashboard');

// Companies

Route::resource('companies', CompanyController::class)
    ->middleware(['auth']);


// AUTH

require __DIR__ . '/auth.php';
