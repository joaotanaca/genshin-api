<?php

/** @var \Laravel\Lumen\Routing\Router $router */


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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'character'], function () use ($router) {
        $router->get('', 'CharacterController@index');
        $router->post('', 'CharacterController@store');
        $router->get('{id}', 'CharacterController@show');
        $router->put('{id}', 'CharacterController@update');
        $router->delete('{id}', 'CharacterController@destroy');
    });
});
