<?php
$files = array("userinput");

//Include each required functions file
foreach ($files as $file)
  {
  $url = "../functions/" . $file . "-functions.php";
  include_once $url;
  }
?>
