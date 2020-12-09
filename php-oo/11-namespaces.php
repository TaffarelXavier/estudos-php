<?php

  require_once "classes/produto.php";
  require_once "models/produto.php";

  use classes\Produto as produtoClasse;
  use classes\Produto;

  $produtoClasses = new produtoClasse();
  $produtoClasses->mostrarDetalhes();

  echo "<br />";

  $produtoModels = new Produto(); // ou $produtoModels = new \models\Produto();
  $produtoModels->mostrarDetalhes();