<?php

namespace Core\Http\Controllers;
class HomeController {
  
  public function index() {
    return view('home', ['title' => 'Home Page']);
  }

  public function about() {
    return view('about', ['title' => 'Home Page']);
  }
}
