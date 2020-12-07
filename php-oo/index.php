<?php

  /*
  *  Aula 1 - Classes, Atributos e Métodos
  * 
  *  class Pessoa {
  *    public $nome;
  *    public $idade;
  *  
  *    public function Falar() {
  *      echo "Meu nome é " . $this->nome . " e minha idade é " . $this->idade;
  *    }
  *  }
  *  
  *  $rafael = new Pessoa();
  *  $rafael->nome = "Rafael Diehl";
  *  $rafael->idade = 17;
  *  $rafael->Falar();
  *
  */

  class Login {
    private $email;
    private $senha;

    public function getEmail() {
      return $this->email;
    }

    public function setEmail($e) {
      $email = filter_var($e, FILTER_SANITIZE_EMAIL);
      $this->email = $email;
    }

    public function getSenha() {
      return $this->senha;
    }

    public function setSenha($s) {
      $this->senha = $s;
    }

    public function Logar() {
      if($this->email == "teste@teste.com" && $this->senha == "123456") {
        echo "Logado com sucesso!";
      } else {
        echo "Dados inválidos...";
      }
    }
  }

  $logar = new Login();
  $logar->setEmail("(teste)/\/\/@teste.com");
  $logar->setSenha("123456");
  $logar->Logar();

  echo "<br /> <br />";
  echo "E-mail: " . $logar->getEmail() . "<br />Senha: " . $logar->getSenha();