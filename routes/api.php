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

Route::middleware('cors')->post('/identitas', 'UserController@create');
Route::middleware('cors')->get('/users/update/{id}', 'UserController@detail');
Route::middleware('cors')->get('/users/{id}', 'UserController@show');
Route::middleware('cors')->put('/users/update/', 'UserController@update');
Route::middleware('cors')->post('/users/cari','UserController@cari');
Route::middleware('cors')->get('/users/hapus/{id}', 'UserController@destroy' );
Route::middleware('cors')->post('/users/email', 'UserController@mail');
Route::middleware('cors')->post('/users/username', 'UserController@username');


