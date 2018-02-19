<?php
namespace Bridge\Application;

use Bridge\Application\Route\Action;
use Bridge\Application\Route\Method;
use Bridge\Application\Route\NamespaceValue;
use Bridge\Application\Route\Prefix;
use Bridge\Application\Route\Uri;

interface RouteInterface
{
    public function getMethod(): Method;
    public function getUri(): Uri;
    public function getAction(): Action;
    public function getNamespace(): NamespaceValue;
    public function getPrefix(): Prefix;
    public function isValid(): bool;
}
