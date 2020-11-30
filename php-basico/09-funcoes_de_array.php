<?php

  $elementos = ["Fogo", "Terra", "Ar", "Água"];
  if(is_array($elementos)) {
    echo "É um array";
  } else {
    echo "Não é um array";
  }

  echo "<hr />";

  if(in_array("Fogo", $elementos)) {
    echo "Existe no array";
  } else {
    echo "Não existe no array";
  };

  echo "<hr />";

  $usuario = ["Nome" => "Rafael", "Idade" => 17, "Telefone" => "+55 (YY) XXXXX-XXXX"];
  $keys = array_keys($usuario);
  print_r($keys);