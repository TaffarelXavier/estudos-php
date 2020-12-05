<?php

  require_once 'db_connect.php';

  session_start();

  if(isset($_POST['entrar'])) {
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) || empty($senha)) {
      $erros[] = "O campo login/senha precisa ser preenchido.";
    } else {
      $sql = "SELECT login FROM usuarios WHERE login = '$login'";
      $resultado = mysqli_query($connect, $sql);

      if(mysqli_num_rows($resultado) > 0) {
        $senha = md5($senha);
        $sql = "SELECT login FROM usuarios WHERE login = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) == 1) {
          $dados = mysqli_fetch_array($resultado);
          mysqli_close($connect);
          $_SESSION['logado'] = true;
          $_SESSION['Id'] = $dados['Id'];
          header('Location: home.php');
        } else {
          $erros[] = "Nome de usuário e senha não correspondem. ";
        }
      } else {
        $erros[] = "O nome de usuário \"$login\" não existe. ";
      }
    }
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
    <div class="error">
    <?php

      if(!empty($erros)) {
        echo "Erro: ";
        foreach($erros as $indice => $erro) {
          echo $erro;
        }
      }

    ?>
    </div>
  </fieldset>

  <div class="bg-squares">
    <div class="square white square-1"></div>
    <div class="square white square-2"></div>
    <div class="square pink square-3"></div>
  </div>
  
</body>
</html>