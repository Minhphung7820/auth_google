<?php

use App\Http\Controllers\API\GoogleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('google/login/url', [GoogleController::class, 'getAuthUrl']);
Route::post('google/auth/login', [GoogleController::class, 'postLogin']);
Route::middleware(['auth:api'])->group(function () {
    Route::get('google/drive', [GoogleController::class, 'getDrive']);
});
