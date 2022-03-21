<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\WebsiteSubscriberController;

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

Route::post('website/{id}', [PostController::class, 'store']);

Route::post('subscribe/{website}/{user}', [WebsiteSubscriberController::class, 'store']);

Route::post('/notify/{id}', [EmailController::class, 'send']);