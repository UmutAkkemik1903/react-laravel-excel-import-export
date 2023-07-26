<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('product','App\Http\Controllers\Api\ExcelController@index');
Route::get('export','App\Http\Controllers\Api\ExcelController@export');
Route::post('import','App\Http\Controllers\Api\ExcelController@import');
Route::post('drop','App\Http\Controllers\Api\ExcelController@dropTable');
