<?php
namespace Bridge\Application\Route;

use Closure;
use Bridge\Application\Helper\Enum;

final class PossibleAttributes extends Enum {

    const ATTR_MIDDLEWARE = 'middleware';
    const ATTR_PREFIX = 'prefix';
    const ATTR_NAMESPACE = 'namespace';

    const POSSIBLE_VALUES = [
        self::ATTR_MIDDLEWARE,
        self::ATTR_PREFIX,
        self::ATTR_NAMESPACE,
    ];
}