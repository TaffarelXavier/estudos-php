<?php

  class Produto {
    private $nome, $descricao;

    public function getNome() {
      return $this->nome;
    }

    public function setNome($nome) {
      $this->nome = $nome;
    }

    public function getDescricao() {
      return $this->descricao;
    }

    public function setDescricao($descricao) {
      $this->descricao = $descricao;
    }
  }