<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\GroceryController;
use App\Http\controllers\OrderController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/groceries',[GroceryController::class,'index']);

Route::get('/orders/{order}',[OrderController::class,'show']);

Route::get('/orders',[OrderController::class,'index']);

Route::post('/order',[OrderController::class,'store']);

Route::put('/order/{order}',[OrderController::class,'update']);

