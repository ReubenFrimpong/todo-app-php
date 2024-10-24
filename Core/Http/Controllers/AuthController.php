<?php

namespace Core\Http\Controllers;

require_once get_base_path('Core/Database');
require get_base_path('Core/Http/Requests/AuthenticationRequest');

use Core\Database;
use Core\Http\AuthenticationRequest;

class AuthController {

  public function login() {
    return view('auth/login');
  }

  public function register() {
    return view('auth/register');
  }

  public function signUp() {
    $input = ['email' => $_POST['email'], 'password' => $_POST['password']];
    $request = new AuthenticationRequest($input);
    (new Database)->query("INSERT INTO users(email, password) values (:email, :password)",  $request->validated());
    redirect('/blog');
  }
}