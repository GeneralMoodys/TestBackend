<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerMobil;
use App\Http\Controllers\ControllerMotor;
use App\Http\Controllers\ControllerKendaraan;

Route::apiResource('Kendaraans', ControllerKendaraan::class);
Route::apiResource('Motors', ControllerMotor::class);
Route::apiResource('Mobils', ControllerMobil::class);
