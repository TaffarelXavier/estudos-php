<?php

  class Pessoa {
    public $nome;
    public $idade;

    public function Falar() {
      echo "Meu nome é " . $this->nome . " e minha idade é " . $this->idade;
    }
  }

  $rafael = new Pessoa();
  $rafael->nome = "Rafael Diehl";
  $rafael->idade = 17;
  $rafael->Falar();