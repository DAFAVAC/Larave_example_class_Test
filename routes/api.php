<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;



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
Route::get("testLevel","App\Http\Controllers\LevelController@index");
Route::post("testLevelPost","App\Http\Controllers\LevelController@store");

Route::get("testUser","App\Http\Controllers\UserController@index");
Route::post("testUserPost","App\Http\Controllers\UserController@store");


Route::get("testGroup","App\Http\Controllers\GroupController@index");
Route::post("testGroupPost","App\Http\Controllers\GroupController@store");