<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\ReservationController;


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

Route::get('/', function () {
    return response()->json(['message' => 'BookingAPI', 'status' => 'Connected']);
});

Route::get('/migrate', function() {
    Artisan::call('migrate:fresh --seed');
    //Artisan::call('db:seed');
    return ['migrate' => 'done'];
});

Route::get('/test', function() {
    return ['works' => 'lmao'];
});

Route::group(array('prefix' => 'customers'), function()
{
    Route::get('/', [CustomerController::class, 'index']);
    Route::get('/{id}', [CustomerController::class, 'search']);

    Route::post('/add', [CustomerController::class, 'add']);
    Route::post('/update/{id}', [CustomerController::class, 'update']);

    Route::delete('/delete/{id}', [CustomerController::class, 'delete']);
});


Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/roomstypes', [RoomTypeController::class, 'index']);
Route::get('/reservations', [ReservationController::class, 'index']);