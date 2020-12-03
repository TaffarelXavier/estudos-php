<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload de Arquivos</title>
</head>
<body>
  
  <?php

    if(isset($_POST['enviar'])) {
      $formatosPermitidos = ["png", "jpeg", "jpg", "gif"];
      $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

      if(in_array($extensao, $formatosPermitidos)) {
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid() . ".$extensao";

        if(move_uploaded_file($temporario, $pasta.$novoNome)) {
          $mensagem = "Upload feito com sucesso!";
        } else {
          $mensagem = "Erro, não foi possível fazer o upload";
        }
      } else {
        $mensagem = "Formato não permitido";
      }

      echo $mensagem;
    }

  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo" /> <br />
    <button typo="submit" name="enviar">
      Enviar arquivo
    </button>
  </form>

</body>
</html>