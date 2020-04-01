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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/client', 'ApiController@create');

Route::get('/clients', 'ApiController@show');

Route::get('/client/{id}', 'ApiController@showbyid');

Route::put('/clientupdate/{id}', 'ApiController@updatebyid');

Route::delete('/clientdelete/{id}', 'ApiController@deletebyid');

Route::post('/worker', 'ApiController_Worker@create');

Route::get('/workers', 'ApiController_Worker@show');

Route::get('/worker/{id}', 'ApiController_Worker@showbyid');

Route::put('/workerupdate/{id}', 'ApiController_Worker@updatebyid');

Route::delete('/workerdelete/{id}', 'ApiController_Worker@deletebyid');

Route::post('/order', 'ApiController_Order@create');

Route::get('/orders', 'ApiController_Order@show');

Route::get('/order/{id}', 'ApiController_Order@showbyid');

Route::put('/orderupdate/{id}', 'ApiController_Order@updatebyid');

Route::delete('/orderdelete/{id}', 'ApiController_Order@deletebyid');

Route::post('/service', 'ApiController_Service@create');

Route::get('/services', 'ApiController_Service@show');

Route::get('/service/{id}', 'ApiController_Service@showbyid');

Route::put('/serviceupdate/{id}', 'ApiController_Service@updatebyid');

Route::delete('/servicedelete/{id}', 'ApiController_Service@deletebyid');

Route::post('/category', 'ApiController_Category@create');

Route::get('/categories', 'ApiController_Category@show');

Route::get('/category/{id}', 'ApiController_Category@showbyid');

Route::put('/categoryupdate/{id}', 'ApiController_Category@updatebyid');

Route::delete('/categorydelete/{id}', 'ApiController_Category@deletebyid');
