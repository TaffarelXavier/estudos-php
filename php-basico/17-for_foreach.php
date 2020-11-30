<?php

  for ($contador = 0; $contador <= 10; $contador++) {
    echo "8 x $contador = " . $contador * 8 . "<br />";
  }

  echo "<hr />";

  $arr = ["Abacaxi", "Banana", "Caju"];

  foreach ($arr as $fruta) {
    echo "$fruta <br />";
  }

  echo "<hr />";

  $char = ["Nome" => "Astolfo", "Raça" => "Gnomo", "Classe" => "Mago"];

  foreach ($char as $indice => $valor) {
    echo "$indice: $valor <br />";
  }