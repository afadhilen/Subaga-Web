<?php

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
    return view('index');
});

Route::get('/list', function () {
    return view('list');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    //News Routes
    $router->get('nav-bar',  ['uses' => 'ApiController@getNavBar']);
});