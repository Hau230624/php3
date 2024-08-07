<?php

use App\Http\Middleware\isAmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\categoryController;

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
// Route::get('list', function () {
//     return view('admin.list');
// });
Auth::routes(['verify' => true]);
Route::get('auth/Login',        [AuthController::class,'FormLogin'])->name('Login');
Route::post('auth/Login',       [AuthController::class,'Login'])->name('Login');
Route::post('auth/LogOut',      [AuthController::class,'LogOut'])->name('LogOut');

Route::get('auth/Register',       [AuthController::class,'FormRegister'])->name('Register');
Route::post('auth/Register',      [AuthController::class,'Register'])->name('Register');

Route::get('/',                 [newController::class,'index'])->name('homing');
Route::get('show/{id}',         [newController::class,'show']);
Route::get('showcate/{id}',     [newController::class,'showCate']);
Route::get('admin/create',              [newController::class,'create'])->name('create')->middleware('isAdmin');
Route::post('admin/create',             [newController::class,'store'])->name('create')->middleware('isAdmin');
Route::get('admin/destroy/{id}',        [newController::class,'destroy'])->name('destroy')->middleware('isAdmin');
Route::get('admin/edit/{id}',           [newController::class,'edit'])->name('edit')->middleware('isAdmin');
Route::post('admin/edit/{id}',          [newController::class,'update'])->name('edit')->middleware('isAdmin');

Route::get('admin/dashboard',           [AdminController::class,'Admin'])->name('admin')->middleware('isAdmin');
Route::get('admin/list',                [AdminController::class,'index'])->name('list')->middleware('isAdmin');

Route::get('admin/create_cate',              [categoryController::class,'create'])->name('create_cate')->middleware('isAdmin');
Route::post('admin/create_cate',             [categoryController::class,'store'])->name('create_cate')->middleware('isAdmin');
Route::get('admin/list_cate',           [categoryController::class,'index'])->name('list_cate')->middleware('isAdmin');
Route::get('admin/destroy_cate/{id}',   [categoryController::class,'destroy'])->name('destroy_cate')->middleware('isAdmin');
Route::get('admin/edit_cate/{id}',      [categoryController::class,'edit'])->name('edit_cate')->middleware('isAdmin');
Route::post('admin/edit_cate/{id}',     [categoryController::class,'update'])->name('edit_cate')->middleware('isAdmin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
