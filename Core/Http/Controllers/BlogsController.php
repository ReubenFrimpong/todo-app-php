<?php
namespace Core\Http\Controllers;

class BlogsController {

  public function index() {
    return view('blog/show', ['title' => 'Blogs Page']);
  }

}