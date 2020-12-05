<?php

  require_once 'db_connect.php';

  session_start();

  if(!isset($_SESSION['logado'])) {
    header('Location: index.php');
  }

  $id = $_SESSION['Id_usuario'];
  $sql = "SELECT * FROM usuarios WHERE Id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
  mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Restrita</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/main.css" />
</head>
<body>
  <h1 class="welcome">Olá, <?php echo $dados['nome']; ?>!</h1>

  <a href="logout.php">Sair</a>

  <div class="bg-squares">
    <div class="square white square-1"></div>
    <div class="square white square-2"></div>
    <div class="square pink square-3"></div>
  </div>
  
</body>
</html>