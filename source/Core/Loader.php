<?php

/** Namespace */
namespace Source\Core;

/**
 * Loader core class
 * @package Source\Core
 */
class Loader
{
    public function register()
    {
        spl_autoload_register([$this, 'autoload']);
    }

    public function autoload($class)
    {
        $class = DIR . DS . str_replace('\\', DS, $class) . '.php';
        require_once $class;
    }
}
