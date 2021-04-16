<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// --------------------------BOOK--------------------------

Route::get('/books/all', [BookController::class, 'index']);

Route::get('/books/individualBook/{id}', [BookController::class, 'individualBook']);

Route::post('/books/create', [BookController::class, 'create']);

Route::post('/books/update/{id}', [BookController::class, 'update']);

Route::post('/books/delete/{id}', [BookController::class, 'delete']);

// ---------------------------USER-------------------------

Route::get('/users/all', [UserController::class, 'index']);

Route::post('/users/active/{id}', [UserController::class, 'active']);

// ----------------------------Checkouts-------------------

Route::get('/checkouts/all', [CheckoutController::class, 'index']);

Route::get('/checkouts/show/{id}', [CheckoutController::class, 'show']);


