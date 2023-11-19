<?php

use Illuminate\Support\Facades\Route;
use Max\SecurityAuditBot\Controllers\StatController;

Route::get('/stat', [StatController::class, 'index']);
