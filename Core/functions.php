<?php

 function dd($value) {
    var_dump($value);
    die();
 }

 function get_base_path($path = '') 
 {
    return BASE_PATH.$path.'.php';
 }

 function view($path, $args = [])
 {
   $fullPath = get_base_path('views/'.$path.'.view');
   extract($args);
  require($fullPath);
 }

 function redirect($location)
 {
    header("location: {$location}");
    exit();
 }
