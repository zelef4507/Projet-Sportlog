<?php

define('ROOT', dirname(__DIR__));

/**
 * Autoloader classes
 */
require 'vendor/autoload.php';

require 'utils/Utils.php';

use App\Core\Model\Model;
use App\Router;


/**
 * Session init
 */
Model::getModel("Session\\Session")->init();


/**
 * Page content init
 */
$rooter = Router::getRouter();
$rooter->init();



