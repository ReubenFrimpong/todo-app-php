<?php

namespace Core;

use ReflectionClass;

require get_base_path('Core/Validator');

class FormRequest {

  protected $errors = [];
  protected $validated = [];

  public function validate($input)
  {
    $reflection = new ReflectionClass(Validator::class);
    foreach ($this->rules() as $key => $rules)
    {
      foreach ($rules as $rule) {
        $method = $reflection->getMethod($rule);
        $message = $method->invoke(null, $input[$key]);
        strlen($message) === 0 ? $this->validated[$key] = $input[$key] : $this->errors[$key] = $message;
      }
    }
  }

  public function validated()
  {
    return $this->validated;
  }

  public function errors()
  {
    return $this->errors;
  }
}