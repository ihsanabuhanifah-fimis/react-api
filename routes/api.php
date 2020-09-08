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
Auth::routes();
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/identitas', 'UserController@create');
Route::get('/users/update/{id}', 'UserController@detail');
Route::get('/users/{id}', 'UserController@show');
Route::put('/users/update/', 'UserController@update');
Route::post('/users/cari','UserController@cari');
Route::get('/users/hapus/{id}', 'UserController@destroy' );
Route::post('/users/email', 'UserController@mail');
Route::post('/users/username', 'UserController@username');


