<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/create_user', [UserController::class, 'create']);
Route::post('/user/create_user', [UserController::class, 'store']) -> name('register_user');
//Route::post("/users/login", [UserController::class, "login"]);

//Pages
Route::get('/user/login', [UserController::class, 'loginPage']);
#Route::get('/user/calendar', [UserController::class, 'calendarPage']) ;