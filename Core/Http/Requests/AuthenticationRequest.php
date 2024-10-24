<?php

namespace Core\Http;

require get_base_path('Core/FormRequest');

use Core\FormRequest;
use Core\Session;

class AuthenticationRequest extends FormRequest
{
  public function __construct($input = null)
  {
    $this->validate($input);
    if (count($this->errors()) > 0)
    {
      Session::put('errors', $this->errors());
      back();
    }
  }

  public function rules ()
  {
    return ['email' => ['email'], 'password' => ['string']];
  }
}