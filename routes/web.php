<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// COMPANIES 

Route::middleware(['auth'])->prefix('companies')->group(function () {

    Route::get('/', [CompanyController::class, 'index'])->name('companies');

    Route::get('/company/{id}', function () {
        // Uses first & second middleware...
    });
});



Route::get('services', function () {
    return view('services.index');
})->name('services');

require __DIR__ . '/auth.php';
