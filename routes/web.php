<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stripe', [StripeController::class, 'index'])->name('stripe.index');
Route::post('/stripe', [StripeController::class, 'store'])->name('stripe.store');
Route::post('/stripe/fallback', [StripeController::class, 'fallback'])->name('stripe.fallback');
Route::get('/stripe/success', [StripeController::class, 'success'])->name('stripe.success');
Route::get('/stripe/cancel', [StripeController::class, 'cancel'])->name('stripe.cancel');
