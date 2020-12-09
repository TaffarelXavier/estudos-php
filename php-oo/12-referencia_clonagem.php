<?php

  class Pessoa {
    public $idade;

    public function __clone() {
      echo "Clonagem de objetos ";
    }
  }

  $pessoa = new Pessoa();
  $pessoa->idade = 25;

  $pessoa2 = $pessoa;
  $pessoa2->idade = 35;

  echo $pessoa->idade;

  echo "<br />";

  $pessoa3 = clone $pessoa;
  $pessoa3->idade = 45;

  echo $pessoa->idade;

  echo "<br />";

  echo $pessoa3->idade;