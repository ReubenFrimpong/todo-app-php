<?php

namespace Core;

use ReflectionClass;

class Router {

  public static $routes = [];

  public static function get($endpoint, $controller, $action)
  {
    static::$routes['GET'][$endpoint] =  ['controller' => $controller, 'action' => $action];
    return new static;
  }

  public static function post($endpoint, $controller, $action)
  {
    static::$routes['POST'][$endpoint] =  ['controller' => $controller, 'action' => $action];
    return new static;
  }

  public static function navigate() {
    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $requestUri = $_SERVER['REQUEST_URI'];
    $route = static::$routes[$httpMethod][$requestUri];
    $isRouteDefined = !is_null($route);
    if (!$isRouteDefined) {
      return view('404');
    }
    $controller = $route['controller'];
    $action = $route['action'];
    require_once BASE_PATH.str_replace('\\', '/', $controller).'.php';
    $reflection = new ReflectionClass($controller);
    $instance = $reflection->newInstance();
    $method = $reflection->getMethod($action);
    $method->invoke($instance);
    Session::flush('errors');
  }

}