<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CalendarController;
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


Route::post("/users/create", [UserController::class, "store"]);
Route::post("/users/login", [UserController::class, "login"]);

Route::group(["middleware"=>["auth:sanctum"]], function(){
    Route::resource('/recipes', RecipeController::class);
    Route::resource("/calendar", CalendarController::class);
    Route::post("/users/logout", [UserController::class, "logout"]);
    Route::post("/week", [CalendarController::class, "showForWeek"]);
});
