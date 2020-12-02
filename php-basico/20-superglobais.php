<?php

  $x = 10;
  $y = 5;

  function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
  }

  soma();

  echo "<hr />";

  echo $_SERVER['PHP_SELF'];
  
  echo "<br />";

  echo $_SERVER['SERVER_NAME'];
    
  echo "<br />";

  echo $_SERVER['SCRIPT_FILENAME'];
    
  echo "<br />";

  echo $_SERVER['DOCUMENT_ROOT'];
      
  echo "<br />";

  echo $_SERVER['SERVER_PORT'];
      
  echo "<br />";

  echo $_SERVER['REMOTE_ADDR'];