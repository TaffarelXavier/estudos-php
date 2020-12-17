<form action="<?php

  if(isset($_POST['cadastro'])) {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $produto = new \App\Model\Produto($nome, $descricao);
    $produtoDao->create($produto, $config['database']);
  }

?>" method="POST">
  <h3>Cadastro de produto</h3>
  <input name="nome" type="text" placeholder="Nome...">
  <input name="descricao" type="text" placeholder="Descrição...">
  <button type="submit" name="cadastro">Cadastrar</button>
</form>