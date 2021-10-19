<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorizeController;
use \App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
], function () {
    Route::post('login', [AuthorizeController::class, 'login']);
    Route::post('register', [AuthorizeController::class, 'register']);
    Route::get('/products/all',  [ProductsController::class, 'all']);
    Route::get('/product/id/{id}',  [ProductsController::class, 'getById']);
    Route::get('/product/barcode/{barcode}',  [ProductsController::class, 'getByBarcode']);
    Route::post('/products/add',  [ProductsController::class, 'store']);
});
