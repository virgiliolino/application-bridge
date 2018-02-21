<?php
namespace Bridge\Application;

use Bridge\Application\RouteInterface;

interface Router
{
    public function addRoute(RouteInterface $route);
}
