<?php

/** Namespace */
namespace Source\App;

/** Dependencies */
use Source\Core\Controller;

/**
 * Cart app class
 * @package Source\App
 */
class Cart extends Controller
{
    /**
     * @return void
     */
    public function index(): void
    {
        /** View render */
        $this->view->render('cart');
    }
}
