<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\newController;
use App\Http\Middleware\isAmin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('admin', function () {
//     return view('admin.dashboard');
// });
// Route::get('signup', function () {
//     return view('client.signUp');
// });

Route::get('auth/Login',        [AuthController::class,'FormLogin'])->name('Login');
Route::post('auth/Login',       [AuthController::class,'Login'])->name('Login');
Route::post('auth/LogOut',      [AuthController::class,'LogOut'])->name('LogOut');

Route::get('auth/Register',       [AuthController::class,'FormRegister'])->name('Register');
Route::post('auth/Register',      [AuthController::class,'Register'])->name('Register');

Route::get('/',[newController::class,'index']);
Route::get('admin',[newController::class,'Admin'])->middleware(isAmin::class);
Route::get('show/{id}',[newController::class,'show']);
Route::get('showcate/{id}',[newController::class,'showCate']);