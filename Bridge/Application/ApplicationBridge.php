<?php
namespace Bridge\Application;

//use Bridge\Application\CommandHandler;
use Bridge\Application\Router;

/**
 * The main functionalities provided by a modern web framework consist on:
 * - Router
 * - Dependency
 * - Middlewares
 * - ?
 */
abstract class ApplicationBridge
    implements Router/*, DependencyHandler, CommandHandler*/ {};
