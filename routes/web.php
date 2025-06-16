<?php

use Illuminate\Support\Facades\Route;

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
    return view('app');
});
Route::get('/sales', function () {
    return view('/sales/dashboard');
});

Route::get('/sales/customers', function () {
    return view('/sales/customers');
})->name('customers');

Route::get('/sales/customers/{id}', function ($id) {
    return view('/sales/customer-detail', ['customerId' => $id]);
})->name('customer.detail');

Route::get('/sales/leads', function () {
    return view('/sales/leads');
})->name('leads');
