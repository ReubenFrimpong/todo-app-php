<?php

namespace Core\Http;

require get_base_path('Core/FormRequest');

use Core\FormRequest;

class AuthenticationRequest extends FormRequest
{
  public function __construct($input = null)
  {
    $this->validate($input);
  }

  public function rules ()
  {
    return ['email' => ['email'], 'password' => ['string']];
  }
}