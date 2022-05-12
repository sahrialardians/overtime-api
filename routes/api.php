<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{SettingController, EmployeeController, OvertimeController};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::patch('/settings', [SettingController::class, 'update']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::post('/overtimes', [OvertimeController::class, 'store']);
Route::get('/overtime-pays/calculate', [OvertimeController::class, 'show']);

