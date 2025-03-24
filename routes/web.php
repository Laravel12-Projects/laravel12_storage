<?php

use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [InformationController::class, 'index'])->name('index');
Route::get('/create', [InformationController::class, 'create'])->name('create');
Route::post('/store', [InformationController::class, 'store'] )->name('store');
