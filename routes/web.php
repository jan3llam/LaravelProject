<?php

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/edit/{id}', [\App\Http\Controllers\EmployeeController::class, 'edit']);
Route::get('/create', [\App\Http\Controllers\EmployeeController::class, 'create']);


Route::prefix("/employee")->group(function(){
    Route::get('/show/{id}', [\App\Http\Controllers\EmployeeController::class, 'show']);
    Route::post('/store', [\App\Http\Controllers\EmployeeController::class, 'store']);
    Route::post('/delete/{id}',[\App\Http\Controllers\EmployeeController::class, 'destroy']);
    Route::post('/update/{id}',[\App\Http\Controllers\EmployeeController::class, 'update']);
});