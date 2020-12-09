<?php

  class Pedido {
    public $numero;
    public $cliente;
  }

  class Cliente {
    public $nome;
    public $endereco;
  }

  $cliente = new Cliente();
  $cliente->nome = "Rafael Diehl";
  $cliente->endereco = "Rua XXX, Número YYY";

  $pedido = new Pedido();
  $pedido->numero = "123";
  $pedido->cliente = $cliente;

  $dados = array(
    "numero" => $pedido->numero,
    "nome_cliente" => $pedido->cliente->nome,
    "endereco_cliente" => $pedido->cliente->endereco
  );

  var_dump($dados);