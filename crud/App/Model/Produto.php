<?php

  namespace App\Model;

  class Produto {
    private $id, $nome, $descricao;

    public function __construct($nome, $descricao) {
      $this->nome = $nome;
      $this->descricao = $descricao;
    }
    
    public function getNome() {
      return $this->nome;
    }

    public function getDescricao() {
      return $this->descricao;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getId() {
      return $this->id;
    }
  }