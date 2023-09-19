<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\Tasks;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultController('Tasks');
$routes->setDefaultMethod('index');

//$routes->get('/', 'Home::index');


$routes->get('tasks' , [Tasks::class, 'index']);
$routes->add('tasks/create', [Tasks::class, 'create']);
$routes->add('tasks/edit/(:any)', [Tasks::class, 'edit']);
$routes->add('tasks/delete/(:any)', [Tasks::class, 'delete']);


$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

