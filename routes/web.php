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
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get('/comments',  ['uses' => 'CommentController@showAllComments']);
    $router->get('/comments/{id}', ['uses' => 'CommentController@showOneComment']);
    $router->post('/comments', ['uses' => 'CommentController@createComment']);
    $router->put('/comments/{id}', ['uses' => 'CommentController@update']);
    $router->delete('/comments/{id}', ['uses' => 'CommentController@destroy']);
    $router->get('/showBooks',  ['uses' => 'BookController@showBooks']);
});

// $router->get('/comments', 'CommentController@index');
// $router->get('/comments/{id}', 'CommentController@show');
// $router->post('/comments/create', 'CommentController@store');
// $router->put('/comments/update/{id}', 'CommentController@update');
// $router->delete('/comments/delete{id}', 'CommentController@destroy ');
