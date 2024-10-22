<?php

namespace Core\Http\Controllers;
class HomeController {
  
  public function index() {
    return view('home');
  }

  public function about() {
    return view('about');
  }
}
