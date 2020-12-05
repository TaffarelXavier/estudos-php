<?php

  date_default_timezone_set('America/Sao_Paulo');

  echo date('d') . "<br />";
  echo date('D') . "<br />";
  echo date('l') . "<hr />";
  
  echo date('m') . "<br />";
  echo date('M') . "<hr />";

  echo date('y') . "<br />";
  echo date('Y') . "<hr />";

  echo date('d/m/Y'). "<br />";
  echo date('d/m/Y h:i:s'). "<br />";
  echo date('d/m/Y H:i:s'). "<br />";
  echo date('d/m/Y h:i:s A'). "<hr />";

  $date = date('Y-m-d');
  $datetime = date('Y-m-d H:i:s');
  echo "\$date = $date <br />";
  echo "\$datetime = $datetime <hr />";

  $time = time();
  echo date('d/m/Y', $time) . "<hr />";

  $data_pagamento = mktime(15, 30, 00, 02, 15, 2025);
  echo date('d/m - H:i', $data_pagamento) . "<hr />";

  $db_date = '2020-04-10 13:30:00';
  $db_date = strtotime($db_date);
  echo date('d/m/Y', $db_date);