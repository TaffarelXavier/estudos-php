<?php

  namespace App\Model;

  class ProdutoDao {

    public function create(Produto $p, $connConfig) {
      $sql = 'INSERT INTO produtos (nome, descricao) VALUE (:nome, :descricao)';

      $stmt = Conexao::getConn($connConfig)->prepare($sql);
      $stmt->bindParam(':nome', $p->getNome());
      $stmt->bindParam(':descricao', $p->getDescricao());

      $stmt->execute();
    }

    public function read($connConfig) {
      $sql = 'SELECT * FROM produtos';

      $stmt = Conexao::getConn($connConfig)->prepare($sql);
      $stmt->execute();

      if($stmt->rowCount() > 0) {
        $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
      } else {
        echo "<li>Nenhum produto cadastrado</li>";
      }
    }

    public function update(Produto $p, $connConfig) {
      $sql = 'UPDATE produtos SET nome = :nome, descricao = :descricao WHERE id = :id';

      $stmt = Conexao::getConn($connConfig)->prepare($sql);
      $stmt->bindParam(':nome', $p->getNome());
      $stmt->bindParam(':descricao', $p->getDescricao());
      $stmt->bindParam(':id', $p->getId());

      $stmt->execute();
    }

    public function delete($id) {
      
    }
  }