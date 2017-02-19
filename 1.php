<?php
  $ip = $_SERVER["REMOTE_ADDR"];
  $I=gethostbyaddr($ip);
  echo $I;
?>
