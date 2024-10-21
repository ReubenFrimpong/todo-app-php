<?php

 function dd($value) {
    var_dump($value);
    die();
 }

 function get_base_path() 
 {
    return BASE_PATH;
 }

 function view($path) {
  $fullPath = get_base_path().'views/'.$path.'.view.php';
  require($fullPath);
 }