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