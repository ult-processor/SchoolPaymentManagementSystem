<?php

	require __DIR__.'/vendor/autoload.php';

	use PHPRouter\RouteCollection;
	use PHPRouter\Router;
	use PHPRouter\Route;

    // Carga las cosas q esten en la carpeta model, view, controller.
    // El resto lo van a tener q declarar abajo de esto.
    require_once('/autoload.php');

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

	$collection->attachRoute(new Route('/AddUserAction/', array(
	    '_controller' => 'UserController::addUserAction',
	    'methods' => 'POST'
	)));

    $collection->attachRoute(new Route('/ListUsers/', array(
        '_controller' => 'UserController::listUsersView',
        'methods' => 'GET'
    )));

    $collection->attachRoute(new Route('/UpdateUser/:id', array(
        '_controller' => 'UserController::updateUserView',
        'methods' => 'GET'
    )));

    $collection->attachRoute(new Route('/UpdateUserAction/', array(
        '_controller' => 'UserController::updateUserAction',
        'methods' => 'POST'
    )));

	$collection->attachRoute(new Route('/AddStudent/', array(
        '_controller' => 'StudentController::addStudentView',
        'methods' => 'GET'
    )));
    $collection->attachRoute(new Route('/AddStudentAction/', array(
        '_controller' => 'StudentController::addStudentAction',
        'methods' => 'POST'
    )));

    $collection->attachRoute(new Route('/ListStudents/', array(
        '_controller' => 'StudentController::listStudentsView',
        'methods' => 'GET'
    )));

    $collection->attachRoute(new Route('/ListStudents/', array(
        '_controller' => 'StudentController::listStudentsView',
        'methods' => 'POST'
    )));

    $collection->attachRoute(new Route('/ListStudents/:studentName', array(
        '_controller' => 'StudentController::listStudentsWithNameView',
        'methods' => 'GET'
    )));


    $collection->attachRoute(new Route('/AddGuardianAction/', array(
        '_controller' => 'GuardianController::addGuardianAction',
        'methods' => 'POST'
    )));

    $collection->attachRoute(new Route('/AddFee/', array(
        '_controller' => 'FeeController::addFeeView',
        'methods' => 'GET'
    )));
    $collection->attachRoute(new Route('/AddFeeAction/', array(
        '_controller' => 'FeeController::addFeeAction',
        'methods' => 'POST'
    )));
    $collection->attachRoute(new Route('/ListGuardians/', array(
        '_controller' => 'GuardianController::listGuardiansView',
        'methods' => 'GET'
    )));

    $collection->attachRoute(new Route('/AssociateGuardianAction/:guardianID/:studentID', array(
        '_controller' => 'GuardianController::associateGuardianAction',
        'methods' => 'GET'
    )));

    $collection->attachRoute(new Route('/UpdateStudent/:id', array(
        '_controller' => 'StudentController::updateStudentView',
        'methods' => 'GET'
    )));

    $collection->attachRoute(new Route('/UpdateStudentAction', array(
        '_controller' => 'StudentController::updateStudentAction',
        'methods' => 'POST'
    )));

    $collection->attachRoute(new Route('/DeleteUser', array(
        '_controller' => 'UserController::deleteUserView',
        'methods' => 'GET'
    )));
    $collection->attachRoute(new Route('/DeleteUserAction', array(
        '_controller' => 'UserController::deleteUserAction',
        'methods' => 'POST'
    )));

    $collection->attachRoute(new Route('/DeleteStudentAction/:studentID', array(
        '_controller' => 'StudentController::deleteStudentAction',
        'methods' => 'GET'
    )));
    $collection->attachRoute(new Route('/DeleteUserAction', array(
        '_controller' => 'StudentController::deleteStudentAction',
        'methods' => 'POST'
    )));

	$router = new Router($collection);
	$router->setBasePath('/');
	$route = $router->matchCurrentRequest();

