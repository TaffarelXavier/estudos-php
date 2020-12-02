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