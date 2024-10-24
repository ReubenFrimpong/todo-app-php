<?php

const BASE_PATH = __DIR__.'/../';

require '../Core/functions.php';
require '../routes.php';
require_once get_base_path('Core/Session');

use Core\Router;

session_start();

Router::navigate();