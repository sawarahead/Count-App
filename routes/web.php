<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeController;



Route::get('/', [HomeController::class,'getTop']);
Route::get('/record',[HomeController::class,'getRecord']);

Route::get('/types/{id}/edit',[HomeController::class,'getEdit']);

Route::get('/addType',[TypeController::class,'getAddType']);
Route::post('/postAddType',[TypeController::class,'postAddType']);
