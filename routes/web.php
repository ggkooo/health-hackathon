<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoicing', [\App\Http\Controllers\InvoicingController::class, 'show'])->name('invoicing');
