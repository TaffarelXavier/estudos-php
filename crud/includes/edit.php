<?php

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE id = '$id' ";

    $stmt = \App\Model\Conexao::getConn($config['database'])->prepare($sql);
    $stmt->execute();

    $dados = $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
  }

?>

<form action="<?php 

  if(isset($_POST['editar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $produto = new \App\Model\Produto($nome, $descricao);
    $produto->setId($id);
    $produtoDao->update($produto, $config['database']);
    header('Location: index.php');
  }

?>" method="POST">
  <h3>Editar produto</h3>
  <input name="id" hidden value="<?php echo $dados["id"]; ?>">
  <input name="nome" type="text" value="<?php echo $dados["nome"]; ?>">
  <input name="descricao" type="text" value="<?php echo $dados["descricao"]; ?>">
  <button type="submit" name="editar">Editar</button>
</form>
