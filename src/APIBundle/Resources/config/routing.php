<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('api_homepage', new Route('/', array(
    '_controller' => 'APIBundle:Default:index',
)));

return $collection;
