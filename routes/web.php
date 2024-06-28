<?php

<<<<<<< HEAD
use App\Http\Controllers\TransactionController;


Route::get('/', function(){
    return view('test');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
=======
use App\Http\Controllers\Auth\LoginController;
>>>>>>> 8ccdf6b4512553120e576bbc7e34ea0762bae08e

   Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
   Route::post('login', [LoginController::class, 'login']);
   Route::post('logout', [LoginController::class, 'logout'])->name('logout');