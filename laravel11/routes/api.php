<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('users', [UserController::class, 'index']); //php artisan install:api
Route::get('users/{id}', [UserController::class, 'show']);
Route::put('usersupdate/{id}', [UserController::class, 'update']);
Route::post('addnew', [UserController::class, 'store']);
Route::delete('usersdelete/{id}', [UserController::class, 'destroy']);