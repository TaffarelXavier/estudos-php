<?php 

  // Escalares

  $nome = "Olá mundo 123 !@#"; // String
  var_dump($nome);
  if(is_string($nome)) {
    echo "É uma string";
  } else {
    echo "Não é uma string";
  }

  echo "<hr/>";

  $idade = 17; // Inteiro
  var_dump($idade);
  if(is_int($idade)) {
    echo "É um inteiro";
  } else {
    echo "Não é um inteiro";
  }

  echo "<hr/>";

  $altura = 1.78; // Float
  var_dump($altura);
  if(is_float($altura)) {
    echo "É um float";
  } else {
    echo "Não é um float";
  }

  echo "<hr/>";

  $admin = false; // Booleano
  var_dump($admin);
  if(is_bool($admin)) {
    echo "É um booleano";
  } else {
    echo "Não é um booleano";
  }

  echo "<hr/> <br/>";

  // Escalares

  $carros = array("Gol", "Uno", "Camaro"); // Array
  var_dump($carros);
  if(is_array($carros)) {
    echo "É um array";
  } else {
    echo "Não é um array";
  }

  echo "<hr/>";

  class Cliente { // Objeto
    public $nome;
    public function atribuirNome($nome) {
      $this -> $nome = $nome;
    }
  }
  $cliente = new Cliente();
  $cliente -> atribuirNome("Rafael");
  var_dump($cliente);
  if(is_object($cliente)) {
    echo "É um objeto";
  } else {
    echo "Não é um objecto";
  }

  echo "<hr/> <br/>";

  // Especiais

  $cidade = null; // Nulo
  var_dump($cidade);