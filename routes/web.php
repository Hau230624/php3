<?php

use App\Http\Controllers\newController;
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

// Route::get('/', function () {
//     return view('client.index');
// });
Route::get('/',[newController::class,'index']);
Route::get('show/{id}',[newController::class,'show']);
Route::get('showcate/{id}',[newController::class,'showCate']);