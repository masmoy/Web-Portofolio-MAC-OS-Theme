<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Arahkan halaman utama (/) untuk menampilkan view bernama 'portfolio'
Route::get('/', [PortfolioController::class, 'index']);