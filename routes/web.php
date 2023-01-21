<?php

use App\Http\Controllers\Admin\BookController as AdminBookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Main\BookController;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\RoomImagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/main', function () {
    return view('layouts.main');
});




Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/services', [MainController::class, 'service']);
Route::get('/rooms', [MainController::class, 'room']);
Route::get('/room_detail/{id}', [MainController::class, 'room_detail']);
Route::get('free_rooms', [BookController::class, 'free_rooms']);



// Admin
Route::resource('room', RoomController::class);
Route::resource('room_images', RoomImagesController::class);
Route::post('/upload/images', [RoomController::class, 'imageup'])->name('dropzone.upload');
Route::post('/upload/image', [RoomController::class, 'single_upload']);
Route::resource('book', AdminBookController::class);



Route::get('/optimize', function () {
    Artisan::call('optimize');
    return response("success");
});


Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
    return response("success");
});

Route::get('/config_cache', function () {
    Artisan::call('config:cache');
    return response("success");
});

Route::get('/cache_clear', function () {
    Artisan::call('cache:clear');
    return response("success");
});