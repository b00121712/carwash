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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('administrators', App\Http\Controllers\administratorController::class);


Route::resource('branches', App\Http\Controllers\branchController::class);


Route::resource('corporatecustomers', App\Http\Controllers\corporatecustomerController::class);


Route::resource('customers', App\Http\Controllers\customerController::class);


Route::resource('employees', App\Http\Controllers\employeeController::class);


Route::resource('employeeservicelogs', App\Http\Controllers\employeeservicelogController::class);


Route::resource('employeevehiclelogs', App\Http\Controllers\employeevehiclelogController::class);


Route::resource('itemorderlogs', App\Http\Controllers\itemorderlogController::class);


Route::resource('services', App\Http\Controllers\serviceController::class);


Route::resource('servicetypes', App\Http\Controllers\servicetypeController::class);


Route::resource('stockitems', App\Http\Controllers\stockitemController::class);


Route::resource('stockorders', App\Http\Controllers\stockorderController::class);


Route::resource('stockorderinvoices', App\Http\Controllers\stockorderinvoiceController::class);


Route::resource('suppliers', App\Http\Controllers\supplierController::class);


Route::resource('vehicles', App\Http\Controllers\vehicleController::class);
