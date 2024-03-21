<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');

$router->get('/novo', 'UsariosController@add');
$router->post('/novo', 'UsariosController@addAction');

$router->get('/usuario/{id}/editar', 'UsariosController@edit');
$router->post('/usuario/{id}/editar', 'UsariosController@editAction');

$router->get('/usuario/{id}/excluir','UsariosController@del' );