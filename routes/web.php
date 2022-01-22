<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get(':', ['uses' => 'ArticleController@index']);
    $router->get('articles/:', ['uses' => 'ArticleController@articles']);
    $router->get('articles/{id}:', ['uses' => 'ArticleController@show']);
    $router->post('articles/:', ['uses' => 'ArticleController@store']);
    $router->put('articles/{id}:', ['uses' => 'ArticleController@update']);
    $router->delete('articles/{id}:', ['uses' => 'ArticleController@delete']);
});
