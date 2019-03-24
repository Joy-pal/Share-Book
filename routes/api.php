<?php

use Illuminate\Http\Request;

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
Route::prefix('auth')->namespace('Api\Auth')->group(function (){
    Route::post('register', 'RegistrationController@register');
    Route::post('login', 'LoginController@login');                                                          Route::post('logout', 'LoginController@logout');
    Route::get('refresh', 'LoginController@refresh');
    Route::get('me', 'LoginController@me');
    Route::get('me', 'LoginController@logout');
});
Route::group(['prefix' => 'books', 'namespace' => 'Api'], function (){
    Route::get('/', 'BookController@allBooks');
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
