<?php

  if(isset($_POST['entrar'])) {
    echo "Clicou!";
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Login</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/main.css" />
</head>
<body>

  <fieldset class="form-container">
    <h1 class="form-title">Login</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="input-container">
        <label for="login">Nome de usuário</label> <br />
        <input type="text" name="login" placeholder="Digite seu nome de usuário" />
        <i class="fa fa-user"></i>
      </div>
      <div class="input-container">
        <label for="senha">Senha</label> <br />
        <input type="password" name="senha" placeholder="Digite seu senha" />
        <i class="fa fa-lock"></i>
      </div>
      <button type="submit" name="entrar">Entrar</button>
    </form>
  </fieldset>

  <div class="bg-squares">
    <div class="square white square-1"></div>
    <div class="square white square-2"></div>
    <div class="square pink square-3"></div>
  </div>
  
</body>
</html>