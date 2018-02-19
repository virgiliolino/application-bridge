<?php
namespace Bridge\Application\Route;


use Bridge\Application\Application\Bridge\RouteInterface;
use Bridge\Application\Route;

class RouteFactory implements RouteFactoryInterface {
    public static function create(
        $method,
        $uri,
        $action,
        array $attributes = []
    ): RouteInterface {
        $errors = [];
        $method = new Method($method);
        if ($method->isValid()) {
            $errors[] = 'invalid method';
        }
        $uri = new Uri($uri);
        if ($uri->isNull()) {
            $errors[] = 'uri not set';
        }
        $action = new Action($action);

        $namespaceValue = self::readIfSet(PossibleAttributes::ATTR_NAMESPACE, $attributes);
        $namespace = new NamespaceValue($namespaceValue);
        $prefixValue = self::readIfSet(PossibleAttributes::ATTR_PREFIX, $attributes);
        $prefix = new Prefix($prefixValue);
        $middleWareValue = self::readIfSet(PossibleAttributes::ATTR_MIDDLEWARE, $attributes);
        $middleware = new Middleware($middleWareValue);

        return new Route(
            $method, $uri, $action, $namespace, $prefix, $middleware, $errors
        );
    }

    private static function readIfSet($key, $values) {
        return isset($values[$key]) ?
            $values[$key] : "";
    }


}
