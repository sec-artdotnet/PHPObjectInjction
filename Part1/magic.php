<?php
  class MyApp {
    public $name = "Bruce Wayne";
    public $age = 45;
 
    public function printMe() {
      echo "Name: " . $this->name . "<br/>";
      echo "Age: " . $this->age . "<br/>";
    }
 
    public function __construct() {
      echo "[*] __construct() is Called.<br/>";
    }
 
    public function __destruct() {
      echo "[*] __destruct() is Called.<br/>";
    }
 
    public function __wakeup() {
      echo "[*] __wakeup() is Called.<br/>";
    }
 
  }
 
  $obj = new MyApp; // object is created, 
 
  $data = serialize($obj);
 
  $newObj = unserialize($data);
 
  $newObj->printMe();
?>
