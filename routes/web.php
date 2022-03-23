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


$router->get('/comments', 'CommentController@index');
$router->get('/comments/{id}', 'CommentController@show');
$router->post('/comments/create', 'CommentController@store');
$router->put('/comments/update/{id}', 'CommentController@update');
$router->delete('/comments/delete{id}', 'CommentController@destroy ');


$router->get('/', function () use ($router) {
    return $router->app->version();
});
