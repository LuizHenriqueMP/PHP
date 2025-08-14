<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('/', function () {
    return view('home');
});

Route::post('/criar', [UserController::class, 'criar']);

Route::post('/escrever', [UserController::class, 'escrever']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
