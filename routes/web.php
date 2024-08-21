<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

Route::get('/', function () {
    return view('welcome');
});

