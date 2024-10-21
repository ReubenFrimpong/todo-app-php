<?php

namespace Core;

use ReflectionClass;

class Router {

  public static $routes = [];

  public static function get($endpoint, $controller, $action)
  {
    static::$routes[] = [
      'GET' =>  [$endpoint => $endpoint, 'controller' => $controller, 'action' => $action]
    ];
  }

  public static function navigate() {
    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $requestUri = $_SERVER['REQUEST_URI'];
    foreach(static::$routes as $route) {
      $isRouteDefined = !is_null($route[$httpMethod][$requestUri]);
      if (!$isRouteDefined) {
        view('404');
      }
      $controller = $route[$httpMethod]['controller'];
      $action = $route[$httpMethod]['action'];
      require_once BASE_PATH.str_replace('\\', '/', $controller).'.php';
      $reflection = new ReflectionClass($controller);
      $instance = $reflection->newInstance();
      $method = $reflection->getMethod($action);
      $method->invoke($instance);
    }
  }

}