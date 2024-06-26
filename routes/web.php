<?php

use App\Http\Controllers\TransactionController;

Route::get('/', function(){
    return view('test');
});

Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
