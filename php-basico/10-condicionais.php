<?php

  $num = 50;

  if ($num == 10) {
    echo "É igual a 10";
  } else if ($num <= 9) {
    echo "É menor ou igual a 9";
  } else {
    echo "É diferente e maior que 10";
  }

  /* Forma alternativa
  if ($num == 10):
    echo "É igual a 10";
  else:
    echo "É diferente de 10;
  endif; */

  echo "<hr />";

  $media = 5;

  echo ($media >= 6) ? "Aprovado" : "Reprovado";

  echo "<hr />";

  $cor = "vermelho";

  switch ($cor) {
    case "vermelho":
      echo "Sua cor preferida é o vermelho";
      break;

    case "verde":
      echo "Sua cor preferida é o verde";
      break;

    case "azul":
      echo "Sua cor preferida é o azul";
      break;

    default:
      echo "Sua cor preferida não é vermelho, verde ou azul";
      break;
  }

