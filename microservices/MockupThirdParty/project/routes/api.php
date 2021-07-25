<?php

use App\Http\Controllers\TicketController;
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

Route::middleware('simple.auth')->get('/', function (Request $request) {
    return "hello";
});

Route::middleware(['simple.auth'])->group(function () {

    Route::get('/get-tickets', [TicketController::class, 'index']);
    Route::get('/get-ticket/{ticket}', [TicketController::class, 'show']);
    Route::get('/purchase-ticket/{ticket}', [TicketController::class, 'purchaseTicket']);

});
