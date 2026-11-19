<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loanController;
use App\Http\Controllers\emiController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\summaryController;

Route::get('/', function () {
    return view('loan.index');
});

//loan
Route::get('/loan/create', [loanController::class, 'create']);
Route::post('/loan/store', [loanController::class, 'store']);
Route::get('/loan', [loanController::class, 'index']);

//emis
Route::get('/emi/index', [emiController::class, 'index']);
Route::get('/emi/generate/{id}', [emiController::class, 'generate']);
Route::get('/emi/schedule/{id}', [emiController::class, 'show']);

//payment
Route::get('/payment/create', [paymentController::class, 'create']);
Route::post('/payment/store', [paymentController::class, 'store']);
Route::get('/payment', [paymentController::class, "index"]);

//Summary
Route::get('/summary/show/{id}', [summaryController::class, 'show']);