<?php

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

Route::resource('attendance', 'App\Http\Controllers\AttendanceController');
Route::resource('students', 'App\Http\Controllers\StudentsController');
Route::resource('subjects', 'App\Http\Controllers\SubjectsController');
Route::resource('teachers', 'App\Http\Controllers\TeachersController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
