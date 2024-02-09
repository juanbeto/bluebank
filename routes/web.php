<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\MovementController;
use App\Http\Controllers\ReportsController;






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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('reports', [ReportsController::class, 'index']);
Route::get('reports/listtransaction', [ReportsController::class, 'listTransaction'])->name('reports.listtransaction');;
Route::post('reports/listtransaction', [ReportsController::class, 'listTransaction'])->name('reports.listtransaction');;
Route::get('reports/listwithdraw', [ReportsController::class, 'listWithdraw'])->name('reports.listwithdraw');;



Route::resource('clients', ClientController::class);

Route::resource('accounts', AccountController::class);

Route::resource('movements', MovementController::class);

Route::get('movements/create/{id}',  [MovementController::class, 'create']);


