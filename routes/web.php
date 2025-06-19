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

    // Rute untuk Edit Status Customer
    Route::get('/customers/{id}/edit-status', [SalesController::class, 'editStatus'])->name('customer.editStatus');
    Route::put('/customers/{id}/update-status', [SalesController::class, 'updateStatus'])->name('customer.updateStatus');

    // BARU: Rute untuk Halaman Laporan Kinerja Pribadi
    Route::get('/performance-report', function () {
        return view('sales.performance-report');
    })->name('sales.performance_report');

    // BARU: Rute untuk Halaman Jadwal Kunjungan
    Route::get('/visit-schedule', function () {
        return view('sales.visit-schedule');
    })->name('sales.visit_schedule');

    // BARU: Rute untuk Halaman Materi Penjualan
    Route::get('/sales-material', function () {
        return view('sales.sales-material');
    })->name('sales.sales_material');
});

// Authentication routes if you have them from Laravel Breeze/Jetstream
// Auth::routes();