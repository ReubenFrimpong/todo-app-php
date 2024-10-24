<?php

namespace Core;

class Validator {

  public static function string($value, $min=1, $max = INF) 
  {
    $value = trim($value);
    $isValid = strlen($value) > $min && strlen($value) <= $max;
    return $isValid ? '' : "{$value} is not a valid string";
  }

  public static function email($value)
  {
    return filter_var($value, FILTER_VALIDATE_EMAIL) ? '' : "{$value} is not a valid email address";
  }

}