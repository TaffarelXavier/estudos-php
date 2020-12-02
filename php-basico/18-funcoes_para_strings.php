<?php

  $nome = "Rafael Diehl";
  $nomeMaisc = strtoupper($nome);
  echo $nomeMaisc;

  echo "<hr />";

  $nomeMinusc = strtolower($nome);
  echo $nomeMinusc;

  echo "<hr />";

  $mensagem = "Olá mundo";
  echo substr($mensagem, 0, 5);

  echo "<hr />";

  $nome = " Pereira";
  $novoNome = str_pad($nome, 15, "Ednaldo", STR_PAD_LEFT);
  echo $novoNome;

  echo "<hr />";

  $string = str_repeat("Eco ", 5);
  echo $string;

  echo "<hr />";

  echo strlen($mensagem);

  echo "<hr />";

  $texto = "A seleção Argentina será campeã da Copa do Mundo de 2022";
  $novoTexto = str_replace("Argentina", "Brasileira", $texto);
  echo $novoTexto;

  echo "<hr />";

  echo strpos($texto, "2022");

  echo "<hr />";

  $db = 1350.25;
  $preço = number_format($db, 2, ",", ".");
  echo "O valor do produto é R$ $preço";

  echo "<hr />";

  echo round($db);

  echo "<hr />";

  echo ceil($db);

  echo "<hr />";

  echo floor($db);

  echo "<hr />";

  $d20 = rand(1, 20);
  echo "O resultado do d20 foi $d20";