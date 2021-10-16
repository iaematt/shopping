<?php

/** Namespace */
namespace Source\App;

/** Dependencies */
use Source\Core\Controller;
use Source\Models\Product\ProductRepository;

/**
 * Home app class
 * @package Source\App
 */
class Home extends Controller
{
    private $product;

    /** Home constructor */
    public function __construct(ProductRepository $product)
    {
        parent::__construct();
        $this->product = $product;
    }

    /**
     * @return void
     */
    public function index(): void
    {
        /** View render */
        $this->view->render('home');
    }
}
