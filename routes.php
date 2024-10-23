<?php

require 'Core/Router.php';
require 'Core/Http/Controllers/AuthController.php';
require 'Core/Http/Controllers/BlogsController.php';

use Core\Http\Controllers\AuthController;
use Core\Http\Controllers\BlogsController;
use Core\Http\Controllers\HomeController;
use Core\Router;


Router::get('/', HomeController::class, 'index');
Router::get('/about', HomeController::class, 'about');
Router::get('/login', AuthController::class, 'login');
Router::get('/register', AuthController::class, 'register');
Router::post('/sign-up', AuthController::class, 'signUp');
Router::get('/blog', BlogsController::class, 'index');