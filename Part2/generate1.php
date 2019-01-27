<?php
  class WebApp {
    public $logfile = "file.txt";
    public $logdata = "This is Simple Test file.";
  }
 
  $obj = new WebApp;
  echo htmlspecialchars(serialize($obj));
?>
