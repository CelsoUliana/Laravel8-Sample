<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoomController;
use App\Http\Controllers\Api\CustomerApiController;
use App\Http\Controllers\Api\RoomTypeApiController;
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

/*
    Grouping API REST customer model.
*/
Route::group(array('prefix' => 'customers'), function()
{
    Route::get('/', [CustomerApiController::class, 'index']);
    Route::get('/{customer}', [CustomerApiController::class, 'show']);

    Route::post('/', [CustomerApiController::class, 'store']);
    Route::put('/{customer}', [CustomerApiController::class, 'update']);
    
    Route::delete('/{customer}', [CustomerApiController::class, 'delete']);
});

/*
    Grouping API REST roomtype model.
*/
Route::group(array('prefix' => 'roomtypes'), function()
{
    Route::get('/', [RoomTypeApiController::class, 'index']);
    Route::get('/{roomtype}', [RoomTypeApiController::class, 'show']);

    Route::post('/', [RoomTypeApiController::class, 'store']);
    Route::put('/{roomtype}', [RoomTypeApiController::class, 'update']);
    
    Route::delete('/{roomtype}', [RoomTypeApiController::class, 'delete']);
});


Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/reservations', [ReservationController::class, 'index']);