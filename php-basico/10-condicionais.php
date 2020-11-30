<?php

  $num = 50;

  if ($num == 10) {
    echo "É igual a 10";
  } else if ($num <= 9) {
    echo "É menor ou igual a 9";
  } else {
    echo "É diferente e maior que 10";
  }

  echo "<hr />";

  $media = 5;

  echo ($media >= 6) ? "Aprovado" : "Reprovado";

  /* Forma alternativa
  if ($num == 10):
    echo "É igual a 10";
  else:
    echo "É diferente de 10;
  endif;