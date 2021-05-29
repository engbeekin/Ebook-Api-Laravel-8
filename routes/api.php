<?php

use App\Http\Controllers\ApiController\BooksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('books/{book_type?}', [BooksController::class, 'index'])->name('books');
Route::get('books/show/{id}', [BooksController::class, 'show'])->name('show');

// Route::apiResource('books/{book_type}',BooksController::class);
