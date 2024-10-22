<?php

namespace Core\Http\Controllers;
require BASE_PATH.'Core/Database.php';

class HomeController {
  
  public function index() {
    return view('home', ['title' => 'Home Page']);
  }

  public function about() {
    return view('about', ['title' => 'About Page']);
  }
}
