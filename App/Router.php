<?php

$router = new \Core\Router();

$router->add('/' , 'HomeController@index');
$router->add('/users' , 'HomeController@users');
$router->add('/series' , [ 'uses' => 'SeriesController@index' ] );
$router->add('/series/{slug}' , 'SeriesController@serie');
$router->add('/series/{slug}/episode/{id}' , 'SeriesController@episode');


return $router;
