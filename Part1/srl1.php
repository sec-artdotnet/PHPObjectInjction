<?php
  class MyApp {
    public $name = 'Bruce Wayne';
    public $age = 45;
  }
 
  $obj = new MyApp;
  echo serialize($obj);
?>
