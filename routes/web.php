<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/mahasiswa', [PageController::class, 'mahasiswa'])->name('mahasiswa');
Route::get('/umkm', [PageController::class, 'umkm'])->name('umkm');
Route::get('/properti-it-modern', [PageController::class, 'propertiItModern'])->name('properti-it-modern');
