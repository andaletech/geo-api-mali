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

$router->get('/', function () use ($router) {
    return $router->app->version();
});
#region locations

$router->get('/locations', 'LocationController@index');
$router->get('/locations/{id:[0-9]+}', 'LocationController@showLocation');
$router->get('/locations/{id:[0-9]+}/locations', 'LocationController@getLocationLocations');
$router->get('/locations/{id:[0-9]+}/cercles', 'LocationController@getCerclesOfRegion');
$router->get('/locations/{id:[0-9]+}/communes', 'LocationController@getCommunesOfLocation');

#endregion locations
#region regions

$router->get('/regions', 'LocationController@getRegions');
$router->get('/regions/{id:[0-9]+}', 'LocationController@showRegion');
$router->get('/regions/{id:[0-9]+}/cercles', 'LocationController@getCerclesOfRegion');

#endregion regions
#region cercles

$router->get('/cercles', 'LocationController@getCercles');
$router->get('/cercles/{id:[0-9]+}', 'LocationController@showCercle');
$router->get('/cercles/{id:[0-9]+}/communes', 'LocationController@getCommunesOfCercle');

#endregion cercles
#region communes

$router->get('/communes', 'LocationController@getCommunes');
$router->get('/communes/{id:[0-9]+}', 'LocationController@showCommune');
$router->get('/communes/{id:[0-9]+}/quartiers', 'LocationController@getQuartiersOfCommune');

#endregion communes
#region quartiers

$router->get('/quartiers', 'LocationController@getQuartiers');
$router->get('/quartiers/{id:[0-9]+}', 'LocationController@showQuartier');

#endregion quartiers
