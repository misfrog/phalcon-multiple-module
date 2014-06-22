<?php
/*
 * Define custom routes. File gets included in the router service definition.
*/
$router = new Phalcon\Mvc\Router();

$router->setDefaultModule("frontend");
$router->setDefaultNamespace("Multiple\Frontend\Controllers");

$router->add( '/admin', array(
	'namespace' => 'Multiple\Backend\Controllers' ,
	'module' => 'backend',
	'controller' => 'index' ,
	'action' => 'index'
));


$router->add( '/admin/', array(
	'namespace' => 'Multiple\Backend\Controllers' ,
	'module' => 'backend',
	'controller' => 'index' ,
	'action' => 'index'
));


$router->add( '/admin/:controller', array (
	'namespace' => 'Multiple\Backend\Controllers' ,
	'module' => 'backend',
	'controller' => 1,
	'action' => 'index',
));


$router->add( '/admin/:controller/', array (
	'namespace' => 'Multiple\Backend\Controllers' ,
	'module' => 'backend',
	'controller' => 1,
	'action' => 'index',
));


$router->add( '/admin/:controller/:action', array (
	'namespace' => 'Multiple\Backend\Controllers' ,
	'module' => 'backend',
	'controller' => 1,
	'action' => 2,
));

$router->add( '/admin/:controller/:action/', array (
	'namespace' => 'Multiple\Backend\Controllers' ,
	'module' => 'backend',
	'controller' => 1,
	'action' => 2,
));

$router->add('/admin/:controller/:action/:params',array(
	'namespace' => 'Multiple\Backend\Controllers',
	'module' => 'backend',
	'controller' => 1,
	'action' => 2,
	'params' => 3,
));

return $router;
