<?php

use \Phroute\Phroute\RouteCollector;
use \Phroute\Phroute\RouteParser;
use Phroute\Phroute\Dispatcher;
use \Phroute\Phroute\Exception\HttpRouteNotFoundException;
use \Phroute\Phroute\Exception\HttpMethodNotAllowedException;

$router = new RouteCollector(new RouteParser());

require_once realpath('route/web.php');

$router->get('/home-route', function(){
    echo "Hello world";
});


$dispatcher = new Dispatcher($router->getData());
try {
	 $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'] , parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH));
} catch (HttpRouteNotFoundException $e) {
	 echo "Route Not Found";
	 die();
} catch (HttpMethodNotAllowedException $e) {
	 echo "Method Not Allowed";
	 die();
}
echo $response;