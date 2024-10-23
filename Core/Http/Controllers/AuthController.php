<?php

namespace Core\Http\Controllers;


require get_base_path('Core/Database');

use Core\Database;

class AuthController {

  public function login() {
    return view('auth/login');
  }

  public function register() {
    return view('auth/register');
  }

  public function signUp() {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $db = new Database();
    $db->query("INSERT INTO users(email, password) values (:email, :password)",  ['email' => $email, 'password' => $password]);
    header('location: /blog');
  }
}