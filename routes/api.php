<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DuplicateController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/upload-employee', [AttendanceController::class, 'uploadEmployee']);
Route::post('/upload-attendance', [AttendanceController::class, 'uploadAttendance']);
Route::post('/upload-location', [AttendanceController::class, 'uploadLocation']);
Route::post('/upload-attendance-fault', [AttendanceController::class,
'uploadAttendanceFault']);
Route::post('/upload-schedule', [AttendanceController::class, 'uploadSchedule']);
Route::post('/upload-shift', [AttendanceController::class, 'uploadShift']);

Route::post('/find-duplicates', [DuplicateController::class, 'findDuplicates']);