<?php

  require_once 'vendor/autoload.php';
  $config = require_once 'config.php';

  $produto = new \App\Model\Produto();
  $produto->setNome('Notebook Dell');
  $produto->setDescricao('i7, 16 GB');

  $produtoDao = new \App\Model\ProdutoDao();
  $produtoDao->create($produto, $config['database']);