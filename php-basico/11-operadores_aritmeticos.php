<?php

  $a = 10;
  $b = 20;
  $c = 30;
  $d = 5;
  $e = 25;

  $adição = $a + $b;
  echo $adição . " (Adição \"+\")";

  echo "<hr />";

  $subtração = $c - $a;
  echo $subtração . " (Subtração \"-\")";

  echo "<hr />";

  $multiplicação = $d * $a;
  echo $multiplicação . " (Multiplicação \"*\")";

  echo "<hr />";

  $divisão = $c / $a;
  echo $divisão . " (Divisão \"/\")";

  echo "<hr />";

  $módulo = $e % $b;
  echo $módulo . " (Módulo \"%\")";

  echo "<hr />";

  $expo = $a ** $d;
  echo $expo . " (Exponenciação \"**\")";

  echo "<hr />";

  $raiz = $e ** (1/2);
  echo $e . " (Raiz \"** 1/n\")";

  echo "<hr /> <br />";

  $media = ($a + $b + $c + $d + $e) / 5;
  echo "Média = $media";