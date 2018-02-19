<?php
namespace Bridge\Application\Route;

use Bridge\Application\Helper\Enum;

final class Method extends Enum {
    const HEAD = 'HEAD';
    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const PATCH = 'PATCH';
    const DELETE = 'DELETE';
    const PURGE = 'PURGE';
    const OPTIONS = 'OPTIONS';
    const TRACE = 'TRACE';
    const CONNECT = 'CONNECT';

    const POSSIBLE_VALUES = [
        self::HEAD,
        self::GET,
        self::POST,
        self::PUT,
        self::PATCH,
        self::DELETE,
        self::PURGE,
        self::OPTIONS,
        self::TRACE,
        self::CONNECT
    ];
}