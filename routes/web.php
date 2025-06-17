<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sales\SalesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/sales/login', function () {
    return view('sales/auth/login');
});


Route::prefix('sales')->group(function () {
    Route::get('/', function () {
        return view('sales/dashboard');
    })->name('sales.dashboard');

    Route::get('/customers', [SalesController::class, 'index'])->name('customers.index');
    Route::get('/customers/{id}', [SalesController::class, 'show'])->name('customer.detail');
    Route::post('/customers/{id}/notes', [SalesController::class, 'storeVisitNote'])->name('customer.storeVisitNote');

    Route::get('/leads', [SalesController::class, 'createLead'])->name('leads.create');
    Route::post('/leads', [SalesController::class, 'storeLead'])->name('leads.store');

    // BARU: Rute untuk Edit Status Customer
    Route::get('/customers/{id}/edit-status', [SalesController::class, 'editStatus'])->name('customer.editStatus'); //
    Route::put('/customers/{id}/update-status', [SalesController::class, 'updateStatus'])->name('customer.updateStatus'); //
});

// Authentication routes if you have them from Laravel Breeze/Jetstream
// Auth::routes();