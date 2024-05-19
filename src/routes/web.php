<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StampController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [StampController::class, 'index']);
Route::get('/attendance', [AttendanceController::class, 'index']);

Route::get('/register', [AuthController::class, 'index'])->name('register');

Route::middleware('auth')->group(function () {
  Route::get('/', [StampController::class, 'index']);


// Route::post('/register', [AuthController::class, 'register']);

});
// ログアウト
Route::get('/logout', [StampController::class, 'logout']);


Route::post('/stamp/attendance_in', [StampController::class, 'attendance_in']);
Route::post('/stamp/attendance_out', [StampController::class, 'attendance_out']);
Route::post('/stamp/break_in', [StampController::class, 'break_in']);
Route::post('/stamp/break_out', [StampController::class, 'break_out']);

// Route::get('/attendance', [AttendanceController::class, 'attendances']);

