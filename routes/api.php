<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BimbinganController;
use App\Http\Controllers\Api\JadwalAbsensiController;

// Route untuk login (public)
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {

    
    Route::get('/user', function (Request $request) {
        return response()->json($request->user());
    });

    Route::apiResource('jadwal-absensi', JadwalAbsensiController::class);

    Route::apiResource('pengajuan-bimbingan', BimbinganController::class);
    
});
