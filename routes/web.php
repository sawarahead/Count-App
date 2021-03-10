<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeController;



Route::get('/', [HomeController::class,'Top']);
Route::get('/record',[HomeController::class,'Record']);

Route::get('/types/{type}/edit',[HomeController::class,'edit']);

Route::get('/types/create',[TypeController::class,'create']);
Route::get('/types/{type}',[TypeController::class,'show']);
Route::post('/types/store',[TypeController::class,'store']);
