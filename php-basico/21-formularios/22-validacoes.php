<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Roboto, sans-serif;
      color: #5d5d66;
      height: 100vh;
      width: 100vw;
      background-image: linear-gradient(to bottom right, #66bb66, #6666ff);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    form {
      background: #ffffff;
      display: flex;
      flex-wrap: wrap;
      width: 580px;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 2rem 2rem 5rem;
      -webkit-box-shadow: 0 10px 6px -6px #0005;
	    -moz-box-shadow: 0 10px 6px -6px #0005;
	    box-shadow: 0 10px 6px -6px #0005;
      position: relative;
    }

    form h3 {
      font-size: 1.65rem;
      text-transform: uppercase;
      letter-spacing: 1.25px;
      margin-bottom: 0.6rem;
      color: #000000;
    }

    form .container {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      margin-bottom: 1rem;
    }

    form .input-container {
      margin: 0.6rem;
    }

    form label {
      font-size: 0.85rem;
      font-weight: 500;
      letter-spacing: 0.7px;
    }

    form .input-container input {
      border: none;
      font-size: 0.9rem;
      padding: 0.7rem;
      background: #eae9ec;
      margin-top: 10px;
      width: 230px;
    }

    form button {
      position: absolute;
      background: #66bb66;
      border: 2.5px solid #66bb66;
      border-radius: 15px;
      font-size: 0.9rem;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0.5rem 1.5rem;
      color: white;
      cursor: pointer;
      margin-top: 1rem;
      bottom: 2.3rem;
      transition: all .3s;
    }

    form button:hover {
      border: 2.5px solid #66bb66;
      background: white;
      color: #66bb66;
      transition: all .3s;
    }

    .message {
      position: absolute;
      bottom: 1.7rem;
      background: #667fff;
      color: white;
      padding: 0.6rem 1.5rem;
      border: 2px solid white;
      border-radius: 6px;
    }

    .error {
      background: tomato;
    }
  </style>
</head>
<body>
  
  <?php

    if(isset($_POST['enviar'])) {
      $erros = array();

      if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
        $erros[] = "<div class=\"message error\">Idade precisa ser um inteiro</div>";
      }

      if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $erros[] = "<div class=\"message error\">Email inválido</div>";
      }

      if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
        $erros[] = "<div class=\"message error\">Peso precisa ser um valor numérico</div>";
      }

      if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
        $erros[] = "<div class=\"message error\">IP inválido</div>";
      }

      if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
        $erros[] = "<div class=\"message error\">URL inválida</div>";
      }

      if(!empty($erros)) {
        foreach($erros as $erro) {
          echo $erro;
        }
      } else {
        echo "<div class=\"message\">Parabéns, seus dados estão corretos!</div>";
      }

    }

  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <h3>Formulário</h3>
    <div class="container">
      <div class="input-container">
        <label for="nome">Nome</label> <br />
        <input type="text" name="nome" placeholder="Digite seu nome" />
      </div>
      <div class="input-container">
        <label for="idade">Idade</label> <br />
        <input type="text" name="idade" placeholder="Digite sua idade" />
      </div>
      <div class="input-container">
        <label for="email">E-mail</label> <br />
        <input type="text" name="email" placeholder="Digite seu e-mail" />
      </div>
      <div class="input-container">
        <label for="peso">Peso</label> <br />
        <input type="text" name="peso" placeholder="Digite seu peso" />
      </div>
      <div class="input-container">
        <label for="ip">IP</label> <br />
        <input type="text" name="ip" placeholder="Digite seu IP" />
      </div>
      <div class="input-container">
        <label for="url">URL</label> <br />
        <input type="text" name="url" placeholder="Digite sua URL" />
      </div>
    </div>
    <button type="submit" name="enviar">Enviar</button>
  </form> 

</body>
</html>