<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahya-hris', function () {
    return view('mahya-hris');
})->name('mahya.hris');

Route::get('/mahya-hse', function () {
    return view('mahya-hse');
})->name('mahya.hse');

Route::post('/interest', function (\Illuminate\Http\Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'company' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'nullable|string|max:1000',
    ]);

    return back()->with('success', 'Terima kasih ' . $data['name'] . '. Tim Berkemah akan menghubungi kamu secepatnya.');
})->name('interest.store');

Route::post('/company/check', [App\Http\Controllers\CompanyController::class, 'check'])->name('company.check');
Route::post('/company/register', [App\Http\Controllers\CompanyController::class, 'store'])->name('company.register');
Route::get('/login', function() { return view('auth.login'); })->name('login');
Route::post('/login', [App\Http\Controllers\CompanyController::class, 'login']);
Route::get('/dashboard', function() { return view('dashboard'); });
