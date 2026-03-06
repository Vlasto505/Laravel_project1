<?php
use App\Http\Controllers\BookRpcController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookSacController;
use App\Http\Controllers\BookRestController;
use App\Http\Controllers\BookApiController;
use App\Http\Controllers\TimeRestApiController;
use App\Http\Controllers\TimeRpcController;

// REST ruta
Route::get('/rest/time', [TimeRestApiController::class, 'index']);

// RPC ruta
Route::get('/rpc/time', [TimeRpcController::class, 'showTime']);
Route::prefix('restapi')->group(function () {
    Route::apiResource('books', BookApiController::class);
});
Route::prefix('rest')->group(function () {
    Route::resource('books', BookRestController::class);
});
// Primetite da nema @metoda ili [klasa, 'metoda']
Route::get('/sac/books/{id}', BookSacController::class);

//Route::get('/user', function (Request $request) {
//return $request->user();
//})->middleware('auth:sanctum');
Route::post('/rpc/books/{id}/borrow', [BookRpcController::class, 'borrowBook']);
Route::post('/rpc/books/{id}/return', [BookRpcController::class, 'returnBook']);
