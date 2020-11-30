<?php

  define("NOME", "Rafael Diehl");
  define("IDADE", 17);
  define("ALTURA", 1.78);
  define("CASADO", false);

  echo var_dump(NOME) . "<br />";
  echo var_dump(IDADE) . "<br />";
  echo var_dump(ALTURA) . "<br />";
  var_dump(CASADO);

  echo "<hr />";

  echo "Meu nome é " . NOME . ", tenho " . IDADE . " anos e " . ALTURA . " m de altura.";

  echo "<hr />";

  define("TIMES", ["Palmeiras" , "São Paulo", "Corinthians"]);

  function exibeTime() {
      echo TIMES[0];
  }

  exibeTime();