<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) { 
    return $router->app->version();
});

$router->get('/boards','BoardController@index');
$router->post('/boards','BoardController@store');
$router->get('/boards/{id}','BoardController@show');
$router->put('/boards/{id}','BoardController@update');
$router->delete('/boards/{id}','BoardController@destroy');


$router->get('/cards','CardController@index');
$router->get('/board/list/card/{id}','CardController@cardIndex');
$router->post('/cards','CardController@store');
$router->get('/cards/{id}','CardController@show');
$router->put('/cards/{id}','CardController@update');
$router->delete('/cards/{id}','CardController@destroy');


$router->get('/lists','ListController@index');
$router->get('/board/list/{id}','ListController@boardIndex');
$router->post('/lists','ListController@store');
$router->get('/lists/{id}','ListController@show');
$router->put('/lists/{id}','ListController@update');
$router->delete('/lists/{id}','ListController@destroy');


