<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlorController;

Route::get('/flores',[FlorController::class , 'index']);
Route::get('/flores/{id}',[FlorController::class , 'show']);
Route::post('/flores',[FlorController::class , 'store']);
Route::put('/flores/{id}',[FlorController::class , 'update']);
Route::delete('/flores/{id}',[FlorController::class , 'destroy']);