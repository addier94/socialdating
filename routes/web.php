<?php

use App\Http\Controllers\StatusesController;
use Illuminate\Support\Facades\Route;

Route::post('statuses', [StatusesController::class, 'store'])->name('statuses.store');
