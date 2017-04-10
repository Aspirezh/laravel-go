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
//文件导出
Route::get('excel/export','ExcelController@export');
Route::get('excel/import','ExcelController@import');

Route::get('tec','TecController@index');
Route::get('test', 'TestController@index');
//地图百度map
Route::post('map/relation','MapController@index');
//车辆记录
Route::any('car/carNum','CarController@index');

Route::get('admin', function () {
    return view('admin/admin_template');
});
Route::get('auth','GostController@index');
//登录

Route::any('login/login','LoginController@login')->name('login');
Route::get('login', 'LoginController@index');
//Route::any('admin/login','LoginController@loginout');

//Route::any('login/login','LoginController@login')->name('login');
//柱状图
Route::any('tubiao','TubiaoController@index')->name('tubiao');

Route::any('play','CeshiController@go')->name('play');


Route::group(['middleware' => ['api']], function () {
    Route::post('/auth/signup', [
        'uses' => 'AuthController@signup'
    ]);

    Route::post('/auth/signin', [
        'uses' => 'AuthController@signin'
    ]);

    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('/auth/user', [
            'uses' => 'AuthController@user'
        ]);
    });
});

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->post('/auth/signup', [
        'uses' => 'App\Http\Controllers\AuthController@signup'
    ]);

    $api->post('/auth/signin', [
        'uses' => 'App\Http\Controllers\AuthController@signin'
    ]);

    $api->post('/auth/user', [
        'uses' => 'App\Http\Controllers\AuthController@user'
    ])->middleware('jwt.auth');
});
