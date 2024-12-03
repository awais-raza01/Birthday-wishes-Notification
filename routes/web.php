<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BirthdayWishController;

Route::get('/', function () {
    return view('wish-table');
});
Route::post('/store-birthday-wish', [BirthdayWishController::class, 'store'])->name('birthday.store');
