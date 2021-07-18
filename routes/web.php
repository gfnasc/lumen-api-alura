<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function() use ($router){
    $router->get('/series', 'SeriesController@index');
    $router->get('/series/{id}', 'SeriesController@getSerie');
    $router->post('/series', 'SeriesController@store');
});