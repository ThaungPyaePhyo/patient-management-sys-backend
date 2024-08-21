<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\VolunteerController;

Route::get('/patients', [PatientController::class, 'index']);
Route::post('/patients', [PatientController::class, 'store']);

Route::get('/volunteers', [VolunteerController::class, 'index']);
Route::post('/volunteers/login', [VolunteerController::class, 'login']);
