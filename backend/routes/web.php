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
$router->get('/tarefas','TarefaController@index');
$router->get('/tarefas/{id}', 'TarefaController@show');
$router->post('/tarefas','TarefaController@store');
$router->put('/tarefas/{id}','TarefaController@update');
$router->delete('/tarefas/{id}','TarefaController@destroy');

$router->get('/subtarefas','SubtarefaController@index');
$router->get('/subtarefas/{id}', 'SubtarefaController@show');
$router->post('/subtarefas','SubtarefaController@store');
$router->put('/subtarefas/{id}','SubtarefaController@update');
$router->delete('/subtarefas/{id}','SubtarefaController@delete');