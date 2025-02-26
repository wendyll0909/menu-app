<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class, 'index'])->name('menu.index');
Route::get('/create', [MenuController::class, 'create'])->name('menu.create');
Route::post('/store', [MenuController::class, 'store'])->name('menu.store');
Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
Route::put('/update/{id}', [MenuController::class, 'update'])->name('menu.update');
Route::delete('/delete/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');