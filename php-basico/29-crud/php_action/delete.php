<?php

  require_once "db_connect.php";

  if(isset($_POST['btn-remover'])) {
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = '$id'; ";

    if(mysqli_query($connect, $sql)) {
      $_SESSION['mensagem'] = "Removido com sucesso";
      header('Location: ../index.php');
    } else {
      $_SESSION['mensagem'] = "Erro ao remover";
      header('Location: ../index.php');
    }
  }

?>