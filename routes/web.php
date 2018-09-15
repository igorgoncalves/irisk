<?php

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


$router->get('/api/fluxos', "ApiController@fluxos");
$router->get("/api/fluxos/{id}/discriminadores", "ApiController@discriminadores");
$router->get("/api/discriminadores/{id}/parametros", "ApiController@parametros");


