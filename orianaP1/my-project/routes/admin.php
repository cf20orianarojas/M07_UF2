<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

    // ambits de rutes de admin_db
    Route::middleware(['admin_db'])->group(function() {
        // Funcionalitat centres
        Route::get('/centres', [AdminController::class, 'centres']);
        // Funcionalitat usuaris amb mètode POST
        Route::post('/usuaris', [AdminController::class, 'usuaris'])->name('usuaris');
    });