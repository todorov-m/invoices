<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\ContragentController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
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
})->name('login');

#Потребители
Route::get('/users', [UserController::class,'index'])->middleware('auth');
Route::get('/createuser', [UserController::class,'create'])->middleware('auth');
Route::post('/createuser', [UserController::class,'store'])->middleware('auth');

Route::get('/changepass/{id}', [UserController::class,'listuser'])->middleware('auth');
Route::patch('/changepass/{id}', [UserController::class,'updatepass'])->middleware('auth');

Route::post('/login', [UserController::class,'login']);
Route::post('/logout', [UserController::class,'destroy'])->middleware('auth');

# Контрагенти
Route::get('/contragents', [ContragentController::class,'index'])->middleware('auth');
Route::post('/addcontragent', [ContragentController::class,'store'])->middleware('auth');

#Банки
Route::get('/banks', [BankController::class,'index'])->middleware('auth');
Route::post('/addbank', [BankController::class,'store'])->middleware('auth');

#Фактури
Route::get('/newinvoice', [InvoiceController::class,'new'])->middleware('auth');
Route::get('/forminvoice/{uderid}', [InvoiceController::class,'form'])->middleware('auth');
Route::post('/addinvoice', [InvoiceController::class,'store'])->middleware('auth');
