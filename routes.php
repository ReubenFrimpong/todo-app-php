<?php

require 'Core/Router.php';

use Core\Http\Controllers\HomeController;
use Core\Router;


Router::get('/', HomeController::class, 'index');