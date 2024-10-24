<?php

namespace Core;

class Session
{
  public static function has($key)
  {
    return (bool) static::get($key);
  }

  public static function put($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  public static function get($key)
  {
    return $_SESSION['_flashed'][$key] ?? $_SESSION[$key];
  }

  public static function remove($key)
  {
    if (static::has($key)) {
      unset($_SESSION[$key]);
    }
  }

  public static function flash($key, $value)
  {
    $_SESSION['_flashed'][$key] = $value;
  }

  public static function flush()
  {
    $_SESSION = [];
  }
}