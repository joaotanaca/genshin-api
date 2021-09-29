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
        $router->post('', ['middleware' => 'auth', 'uses' => 'CharacterController@store']);
        $router->get('{id}', 'CharacterController@show');
        $router->put('{id}', ['middleware' => 'auth', 'uses' => 'CharacterController@update']);
        $router->delete('{id}', ['middleware' => 'auth', 'uses' => 'CharacterController@destroy']);
    });
    
    $router->group(['prefix' => 'user'], function () use ($router) {
        $router->get('', 'UserController@index');
        $router->post('', 'UserController@store');
        $router->get('profile', 'UserController@profile');
    });

    $router->group([
        'prefix' => 'auth',
    ], function ($router) {
        $router->post('login', 'AuthController@login');
        $router->group([
            'middleware' => 'auth'
        ], function ($router) {
            $router->post('logout',  'AuthController@logout');
            $router->post('refresh', 'AuthController@refresh');
            $router->post('me', 'AuthController@me');
        });
    });
});
