<?php

use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Main\BookController;
use App\Models\Book;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Room
Route::resource('rooms', RoomController::class);

// Book
Route::post('make_book', [BookController::class, 'make_book']);
Route::get('free_rooms', [BookController::class, 'free_rooms']);