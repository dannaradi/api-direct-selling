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

$router->get('/', function () use ($router) {
    // return $router->app->version();
    $data['encrypted'] = encrypted('test');
    $data['decrypted'] = decrypted('dllOc3UzUzJMc0NsSDZuNW11emhLQT09');

    return $data;
});

$router->group(['prefix' => 'api'], function () use ($router) {


});

$router->get('/principal', ['uses' => 'Principal@getPrincipal']);
