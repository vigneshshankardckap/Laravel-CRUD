<?php

use App\Http\Controllers\employeeController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\homeController;

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

Route::get('/employees',[employeeController::class,'index'])->name('employee.index');

Route::get('/employees/create',[employeeController::class,'create'])->name('employee.create');
Route::post('employees/store',[employeeController::class,'store'])->name('employee.store');
Route::get('employees/{employee}',[employeeController::class,'show'])->name('employee.show');
Route::get('employees/{id}/edit',[employeeController::class,'edit'])->name('employee.edit');
Route::put('employees/{employee}',[employeeController::class,'update'])->name('employee.update');
Route::delete('employees/{employee}',[employeeController::class,'destroy'])->name('employee.destroy');



//resource /

// Route::resource('employee',employeeController::class);






