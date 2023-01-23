<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Models\employee;

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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/register', function () {
//     return view('register');
// });
// Route::get('/edit', function () {
//     return view('edit');
// });
// Route::get('/update', function () {
//     return view('update');
// });

Route::get('/', [employeeController::class,'index']);
Route::get('/employee/create',[employeeController::class,'create']);
Route::get('/employee',[employeeController::class,'show']);
Route::post('/employee',[employeeController::class,'store']);
Route::get('/edit/{id}',[employeeController::class,'edit']);
Route::put('/update/{id}',[employeeController::class,'update']);
Route::get('/delete/{id}',[employeeController::class,'destroy']);



