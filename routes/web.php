<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', HomeController::class)->name('home');
Route::resource('items', ItemController::class);
Route::resource('orders', OrderController::class);
Route::resource('carts', CartController::class);
Route::resource('roles', RoleController::class);

Route::prefix('users')->name('users.')->group(function () {
    Route::put('update-role/{user}', [UserController::class, 'updateRole'])->name('update-role');
});
Route::resource('users', UserController::class);



