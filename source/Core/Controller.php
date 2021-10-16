<?php

/** Namespace */
namespace Source\Core;

/**
 * Controller abstract core class
 * @package Source\Core
 */
abstract class Controller
{
    /** @var View */
    protected $view;

    /** Controller constructor */
    public function __construct()
    {
        $this->view = new View();
    }
}
