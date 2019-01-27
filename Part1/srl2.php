<?php
  class MyApp {
    public $name;
    public $age;
 
    public function print() {
      echo 'Name : ' . $this->name . '<br/>';
      echo 'Age : ' . $this->age;
    }
  }
 
  $data = 'O:5:"MyApp":2:{s:4:"name";s:11:"Bruce Wayne";s:3:"age";i:45;}';
  $obj = unserialize($data);
  $obj->print();
?>
