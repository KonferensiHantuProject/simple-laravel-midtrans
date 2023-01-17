<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, TransactionController, OrderController};
use App\Http\Controllers\Webhook\MidtransWebhookController;

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

// Home
Route::get('/', [HomeController::class, 'index']);

// Order
Route::prefix('/order')->group(function () {
    Route::get('/', [OrderController::class, 'index']);
    Route::post('/', [OrderController::class, 'store']);
});

// Transaction
Route::prefix('/transaction')->group(function () {
    Route::get('/', [TransactionController::class, 'index']);
});

// Webhook
Route::post('/webhook', [MidtransWebhookController::class, 'index']);