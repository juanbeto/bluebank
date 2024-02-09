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
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('reports', [ReportsController::class, 'index'])->name('reports')->middleware('auth');
Route::get('reports/listtransaction', [ReportsController::class, 'listTransaction'])->name('reports.listtransaction')->middleware('auth');
Route::post('reports/listtransaction', [ReportsController::class, 'listTransaction'])->name('reports.listtransaction')->middleware('auth');
Route::get('reports/listwithdraw', [ReportsController::class, 'listWithdraw'])->name('reports.listwithdraw')->middleware('auth');



Route::resource('clients', ClientController::class)->middleware('auth');

Route::resource('accounts', AccountController::class)->middleware('auth');

Route::resource('movements', MovementController::class)->middleware('auth');

Route::get('movements/create/{id}',  [MovementController::class, 'create'])->middleware('auth');


