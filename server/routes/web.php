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

$router->get('/links',  'NavigationLinkController@getLinks');
$router->get('/portfolio', 'PortfolioController@getProjects');
$router->post('/portfolio', 'PortfolioController@addProject');
