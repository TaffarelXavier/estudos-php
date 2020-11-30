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

  echo "<hr />";

  $valores = array_values($usuario);
  print_r($valores);

  echo "<hr />";

  $carros = ["Camaro", "Uno", "Gol"];
  $motos = ["Pop100", "50cc", "Cb1000"];
  $veiculos = array_merge($carros, $motos);

  print_r($veiculos);

  echo "<hr />";

  print_r($carros);
  echo "<br /> Valor excluído: " . array_pop($carros) . "<br />";
  print_r($carros);

  echo "<hr />";

  print_r($motos);
  echo "<br /> Valor excluído: " . array_shift($motos) . "<br />";
  print_r($motos);

  echo "<hr />";

  $frutas = ["Uva", "Laranja", "Banana"];
  print_r($frutas);
  array_unshift($frutas, "Manga", "Acerola");
  echo "<br />";
  print_r($frutas);
  array_push($frutas, "Mamão", "Melancia");
  echo "<br />";
  print_r($frutas);

  echo "<hr />";

  $posições = ["Ouro", "Prata", "Bronze"];
  $competidores = ["Maria", "Pedro", "José"];
  $resultado = array_combine($posições, $competidores);
  print_r($resultado);

  echo "<hr />";

  $numeros = [1, 505, -35, 4];
  echo array_sum($numeros);