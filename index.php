<?php

/** DEFINE CONSTANTS */
define('DIR', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

/** Require loader */
require_once DIR . '/source/Core/Loader.php';

/** Start loader */
$loader = new Source\Core\Loader();
$loader->register();

/** Define get parameters */
$page = isset($_GET['page']) ? $_GET['page'] : null;
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

/** Switch */
switch ($page) {
    case 'cart':
        $cart = new Source\App\Cart();
        call_user_func_array([$cart, $action], []);
        break;

    default:
        $home = new Source\App\Home();
        call_user_func_array([$home, $action], []);
}
