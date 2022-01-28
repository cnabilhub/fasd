<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\dashboardController;

// Dashboard


Route::get('/', [dashboardController::class,'index'])
    ->middleware(['auth'])->name('dashboard');

// Companies

Route::resource('companies', CompanyController::class)
    ->middleware(['auth']);


// AUTH

require __DIR__ . '/auth.php';
