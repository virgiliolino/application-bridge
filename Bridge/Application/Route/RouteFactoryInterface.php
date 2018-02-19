<?php
namespace Bridge\Application\Route;

use Bridge\Application\Application\Bridge\RouteInterface;

interface RouteFactoryInterface {
    public static function create(
        $method,
        $uri,
        $action,
        array $attributes = []
    ): RouteInterface;
}