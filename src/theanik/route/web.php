<?php

/**
 * Define your route here
 * 
 * $router->get()
 */

require_once realpath("vendor/autoload.php");

 $router->get('/', ['App\Controller\HomeController','index']);


 