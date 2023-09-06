<?php

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

Route:: get('/guests', [GuestController:: class, 'index']);
Route::post('/guests',[GuestController::class, 'store']);
Route::put('/guests/{id}',[GuestController::class, 'update']);

Route:: get('/rooms', [RoomController:: class, 'index']);
Route::post('/rooms',[RoomController::class, 'store']);
Route::put('/rooms/{id}',[RoomController::class, 'update']);

Route:: get('/bookings', [BookingController:: class, 'index']);
Route::post('/bookings',[BookingController::class, 'store']);
Route::put('/bookings/{id}',[BookingController::class, 'update']);
