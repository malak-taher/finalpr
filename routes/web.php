<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\accountController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\enteringcontroller;
use App\Http\Controllers\userrequestController;
use App\Http\Controllers\statementaccountController;
use App\Http\Controllers\openaccountController;
use App\Http\Controllers\testcontroller;


Route::get('/search-records', 'statementaccountController@searchForm')->name('search-form');
Route::post('/search-records', [StatementAccountController::class, 'searchRecords'])->name('search-records');


Route::get('/entering', [enteringcontroller::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'check']);
Route::get('/logout', [UserController::class, 'logout']);


Route::get('/print', [accountController::class, 'print']);
Route::post('/print', [accountController::class, 'print']);


Route::get('/entering', [enteringcontroller::class, 'index']);
Route::post('/entering', [enteringcontroller::class, 'login']);
Route::resource('userrequests', UserRequestController::class);

Route::post('/userrequests/{id}/acceptance', [UserRequestController::class, 'acceptance'])->name('userrequests.acceptance');

Route::get('/statementaccount', [statementaccountcontroller::class, 'index']);
Route::post('/statementaccount', [statementaccountcontroller::class, 'index']);


Route::get('/home', [homecontroller::class, 'index']);
Route::post('/home', [homecontroller::class, 'index']);

//Route::get('/userrequest', [homecontroller::class, 'userrequest']);
//Route::post('/userrequest', [homecontroller::class, 'userrequest']);



Route::get('/user', [UserController::class, 'index']);
Route::get('/user-add', [UserController::class, 'add']);
Route::post('/user-add', [UserController::class, 'store']);
Route::get('/user-edit/{id}', [UserController::class, 'edit']);
Route::put('/user-update/{id}', [UserController::class, 'update']);
Route::get('/user-delete/{id}', [UserController::class, 'delete']);


Route::get('/account', [accountController::class, 'index']);
Route::get('/account-add', [accountController::class, 'add']);
Route::post('/account-add', [accountController::class, 'store']);
Route::get('/reportaccount', [accountController::class, 'reportaccount']);
Route::post('/reportaccount', [accountController::class, 'store']);
Route::get('/account-edit/{id}', [accountController::class, 'edit']);
Route::put('/account-update/{id}', [accountController::class, 'update']);
Route::get('/account-delete/{id}', [accountController::class, 'delete']);


Route::get('/transfer', [TransferController::class, 'index']);
Route::get('/transfer-add', [TransferController::class, 'add']);
Route::post('/transfer-add', [TransferController::class, 'store']);





Route::get('/openaccount', [openaccountController::class, 'index']);
Route::get('/openaccount', [openaccountController::class, 'add']);
Route::post('/openaccount', [openaccountController::class, 'store']);

