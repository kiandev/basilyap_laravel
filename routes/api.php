<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('about','AboutController');
Route::resource('unit_base','UnitBaseController');
Route::resource('unit_advance','UnitAdvanceController');
Route::resource('user','UserController');
Route::post('user/login','UserController@login');
Route::post('user/email','UserController@email');
Route::resource('opinion','OpinionController');
