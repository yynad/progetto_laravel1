<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PlatformController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/book/create', [PublicController::class, 'create'])->name('book.create');
Route::post('/book/store',[PublicController::class, 'store'])->name('book.store');
Route::get('book/index', [PublicController::class, 'index'])->name('book.index');
Route::get('book/show/{book}', [PublicController::class, 'show'])->name('book.show');
Route::get('book/edit/{book}', [PublicController::class, 'edit'])->name('book.edit');
Route::put('book/update/{book}', [PublicController::class, 'update'])->name('book.update');
Route::delete('book/delete/{book}', [PublicController::class, 'delete'])->name('book.delete');
Route::get('/dashboard', [PublicController::class, 'dashboard'])->name('dashboard');
Route::get('/platform/index', [PlatformController::class, 'index'])->name('platform.index');
Route::get('/platform/create', [PlatformController::class, 'create'])->name('platform.create');
Route::post('/platform/store', [PlatformController::class, 'store'])->name('platform.store');
Route::get('platform/show/{platform}', [PlatformController::class, 'show'])->name('platform.show');