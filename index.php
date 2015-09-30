<?php

	require __DIR__.'/vendor/autoload.php';

	use PHPRouter\RouteCollection;
	use PHPRouter\Router;
	use PHPRouter\Route;

    // Carga las cosas q esten en la carpeta model, view, controller.
    // El resto lo van a tener q declarar abajo de esto.
    require_once('/Autoload.php');

	$collection = new RouteCollection();


    $collection->attachRoute(new Route('/', array(
        '_controller' => 'HomeController::showView',
        'methods' => 'GET'
    )));

    $collection->attachRoute(new Route('/login/', array(
        '_controller' => 'LoginController::showView',
        'methods' => 'GET'
    )));

    $collection->attachRoute(new Route('/backend/', array(
        '_controller' => 'BackendController::showView',
        'methods' => 'POST'
    )));

	$collection->attachRoute(new Route('/AddUser/', array(
		'_controller' => 'UserController::addUserView',
		'methods' => 'GET'
	)));

	$collection->attachRoute(new Route('/createUser/', array(
	    '_controller' => 'UserController::createUser',
	    'methods' => 'POST'
	)));


	$router = new Router($collection);
	$router->setBasePath('/');
	$route = $router->matchCurrentRequest();

