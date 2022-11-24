<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\RecipeController;

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
    Route::apiResource('/users/recipes', 'api\RecipeController');
    Route::apiResource("/users/calendar", 'api\CalendarController');
    Route::post("/users/logout", [UserController::class, "logout"]);
});

Route::middleware('auth:sacntum')->get('/user', function(Request $req){
    return $req->user();
});