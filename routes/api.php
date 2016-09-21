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

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');




Route::group(['prefix' => 'v1', 'namespace' => 'Api\V1'], function ($api) {


    $api->post('register', 'RegisterController@create');
    $api->post('login', 'AuthController@login');
    $api->post('reset', 'PasswordController@save');


//    $api->group(['middleware' => 'auth:api'], function ($api) {

        $api->get('users', function ()    {
            // Matches The "/admin/users" URL
        });

        $api->delete('logout', 'AuthController@logout');

        $api->get('events', 'EventsController@index');
        $api->post('events', 'EventsController@save');
        $api->patch('events/{id}', 'EventsController@update');
        $api->delete('events/{id}', 'EventsController@destroy');


//    });
});