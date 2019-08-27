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

$router->group(['prefix' => '/v1'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return $router->app->version();
    });
    #region locations
    
    $router->get('/locations', 'V1LocationController@index');
    $router->get('/locations/{id:[0-9]+}', 'V1LocationController@showLocation');
    $router->get('/locations/{id:[0-9]+}/locations', 'V1LocationController@getLocationLocations');
    $router->get('/locations/{id:[0-9]+}/cercles', 'V1LocationController@getCerclesOfRegion');
    $router->get('/locations/{id:[0-9]+}/communes', 'V1LocationController@getCommunesOfLocation');
    
    #endregion locations
    #region regions
    
    $router->get('/regions', 'V1LocationController@getRegions');
    $router->get('/regions/{id:[0-9]+}', 'V1LocationController@showRegion');
    $router->get('/regions/{id:[0-9]+}/cercles', 'V1LocationController@getCerclesOfRegion');
    $router->get('/regions/{id:[0-9]+}/communes', 'V1LocationController@getCommunesOfLocation');
    
    #endregion regions
    #region cercles
    
    $router->get('/cercles', 'V1LocationController@getCercles');
    $router->get('/cercles/{id:[0-9]+}', 'V1LocationController@showCercle');
    $router->get('/cercles/{id:[0-9]+}/communes', 'V1LocationController@getCommunesOfCercle');
    
    #endregion cercles
    #region communes
    
    $router->get('/communes', 'V1LocationController@getCommunes');
    $router->get('/communes/{id:[0-9]+}', 'V1LocationController@showCommune');
    $router->get('/communes/{id:[0-9]+}/quartiers', 'V1LocationController@getQuartiersOfCommune');
    
    #endregion communes
    #region quartiers
    
    $router->get('/quartiers', 'V1LocationController@getQuartiers');
    $router->get('/quartiers/{id:[0-9]+}', 'V1LocationController@showQuartier');
    
    #endregion quartiers
});
