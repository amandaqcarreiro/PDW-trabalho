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


Route::post("/users", [UserController::class, "store"]);

Route::group(["middleware"=>["auth:sanctum"]], function(){
    Route::apiResource('/users/recipes', 'api\RecipeController');
    Route::apiResource("/users/calendar", 'api\CalendarController');    
});

Route::middleware('auth:sacntum')->get('/user', function(Request $req){
    return $req->user();
});