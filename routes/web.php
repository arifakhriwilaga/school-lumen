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
$router->get('/students', 'StudentController@index');
$router->get('/students/{id}', 'StudentController@show');
$router->post('/students', 'StudentController@store');
$router->put('/students/{id}', 'StudentController@update');
$router->delete('/students/{id}', 'StudentController@destroy');