<?php
  class WebApp {
    public $logfile = null;
    public $logdata = null;
 
    public function OITest() {
      echo '[+] Hello world. This is Function call to OITest();<br/>';
      $this->logfile = 'logs.txt';
      $this->logdata = 'Log Data : Success';
    }
 
    public function __destruct() {
      file_put_contents(DIR . '/' . $this->logfile, $this->logdata);
      echo '[*] Data is written to the file.<br/>';
    }
  }
 
  $input = unserialize($_GET['data']);
 
  $obj = new WebApp;
  $obj->OITest();
?>
