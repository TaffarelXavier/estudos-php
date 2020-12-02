<?php

  function exibirNome($nome) {
    echo "Meu nome é $nome";
  }

  exibirNome("Rafael");

  echo "<hr />";

  function calcularMedia($nome, ...$notas) {
    $soma = 0;
    foreach ($notas as $nota) {
      $soma += $nota;
    }
    $media = $soma / sizeof($notas);
    echo "$nome foi ";
    if ($media >= 6) {
      echo "aprovado";
    } else {
      echo "reprovado";
    }
    echo " com média $media";
  }

  calcularMedia("Rafael", 10, 10, 5, 5);

  echo "<br />";

  calcularMedia("Fulano", 0, 5, 10);
  