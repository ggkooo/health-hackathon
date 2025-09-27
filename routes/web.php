<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoicing', [\App\Http\Controllers\InvoicingController::class, 'show'])->name('invoicing');

Route::get('/patients_invoicing', [\App\Http\Controllers\InvoicingController::class, 'patients_invoicing'])->name('patients_invoicing');

Route::get('reports', [\App\Http\Controllers\ReportController::class, 'index'])->name('reports.index');
Route::get('/patients_invoicing_details', [\App\Http\Controllers\InvoicingController::class, 'patients_invoicing_details'])->name('patients_invoicing_details');
