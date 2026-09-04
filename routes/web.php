<?php

use App\Http\Controllers\DisesbaLandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DisesbaLandingController::class, 'index'])->name('disesba.landing');
