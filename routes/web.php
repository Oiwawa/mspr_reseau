<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'login']);
Route::get('2fa', [AuthController::class, 'doubleFA']);

Route::post('login', [AuthController::class, 'checklogin']);
Route::post('check2fa', [AuthController::class, 'check2fa']);

Route::get('successlogin', [AuthController::class, 'successlogin']);

Route::get('logout', [AuthController::class,'logout']);
