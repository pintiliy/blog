<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => '/user/'], function(){
    Route::get('', 'adminController@showAdminPanel');
    Route::get('permissions', 'TestRoleController@userList');
    Route::post('save-roles', 'TestRoleController@saveUserPermissions');
    Route::post('save-permissions', 'TestRoleController@saveRolePermissions');
});


