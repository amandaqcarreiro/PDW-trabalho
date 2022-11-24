<?php

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


Route::group(["middleware"=>["auth:sanctum"]], function(){
    Route::apiResource('/user/recipes', 'api\RecipeController');
    Route::apiResource("/user/calendar", 'api\CalendarController');    
});

Route::apiResource("/users", 'api\UserController');
Route::middleware('auth:sacntum')->get('/user', function(Request $req){
    return $req->user();
});