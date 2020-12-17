<?php

  namespace App\Model;

  class ProdutoDao {

    public function create(Produto $p, $connConfig) {

      $sql = 'INSERT INTO produtos (nome, descricao) VALUE (?,?)';

      $stmt = Conexao::getConn($connConfig)->prepare($sql);
      $stmt->bindValue(1, $p->getNome());
      $stmt->bindValue(2, $p->getDescricao());
      $stmt->execute();
    }

    public function read() {
      
    }

    public function update(Produto $p) {
      
    }

    public function delete($id) {
      
    }
  }