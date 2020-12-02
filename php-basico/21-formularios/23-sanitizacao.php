<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #2a323c;
      font-family: Roboto, sans-serif;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    form {
      background-color: #323c48;
      border-radius: 5px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 2.25rem 2rem;
      width: 375px;
    }

    form h3 {
      font-size: 1.2rem;
      text-transform: uppercase;
      letter-spacing: 1.5px;
    }

    form > p {
      font-size: 0.95rem;
      margin-top: 1.2rem;
      color: #8a94a4;
      font-weight: 500;
    }

    form .double-container {
      margin-top: 1.5rem;
      width: 100%;
      display: flex;
      flex-direction: row;
    }

    form .double-container .input-container:nth-child(1) {
      margin-right: 9px;
    }

    form .input-container {
      margin: 0.25rem 0;
      width: 100%;
    }

    form .input-container label {
      color: #8a94a4;
      font-size: 0.85rem;
    }

    form .input-container input {
      color: white;
      background: #3B4654;
      border: 2px solid #3f4b5a;
      font-size: 0.9rem;
      padding: 0.5rem;
      border-radius: 3px;
      margin-top: 3px;
      width: 100%;
    }

    form button {
      background: #04A2B3;
      width: 100%;
      padding: 0.6rem;
      color: white;
      font-size: 0.925rem;
      border: none;
      border-radius: 3px;
      margin-top: 2rem;
    }

    .right {
      position: absolute;
      top: 2rem;
      background: #04A2B3;
      border-radius: 5px;
      border: 2px solid #64D2E3;
      padding: 0.5rem 0.8rem;
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    .right span, .wrong span {
      margin-left: 1rem;
      font-size: 0.8rem;
      cursor: pointer;
    }

    .wrong {
      position: absolute;
      bottom: 2rem;
      background: #d34249;
      border-radius: 5px;
      border: 2px solid #f3747e;
      padding: 0.5rem 0.8rem;
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    ::placeholder {
      color: #8a94a4;
      opacity: 1;
    }

    :-ms-input-placeholder {
      color: #8a94a4;
    }

    ::-ms-input-placeholder {
      color: #8a94a4;
    }
  </style>
</head>
<body>
  
  <?php 
  
    if(isset($_POST['enviar'])) {
      $erros = array();

      $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
      $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
      if(!filter_var($idade, FILTER_VALIDATE_INT)) {
        $erros[] = "Idade precisa ser um inteiro.";
      }

      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "E-mail inválido.";
      }

      $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
      if(!filter_var($url, FILTER_VALIDATE_URL)) {
        $erros[] = "URL inválida.";
      }

      if(empty($erros)) {
        echo "<div class=\"right\">Seus dados estão corretos <span class=\"close-right fa fa-times\"></span></div>";
      } else {
        echo "<div class=\"wrong\">";
        foreach($erros as $indice => $erro) {
          echo "[" . ($indice + 1) . "] $erro ";
        }
        echo "<span class=\"close-wrong fa fa-times\"></span></div>";
      }
    }
  
  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <h3>Formulário</h3>
    <p>Preencha os campos abaixo</p>
    <div class="double-container">
      <div class="input-container">
        <label for="nome">Nome</label> <br />
        <input type="text" name="nome" placeholder="Digite seu nome" />
      </div>
      <div class="input-container">
        <label for="idade">Idade</label> <br />
        <input type="text" name="idade" placeholder="Digite sua idade" />
      </div>
    </div>
    <div class="input-container">
      <label for="email">E-mail</label> <br />
      <input type="text" name="email" placeholder="Digite seu e-mail" />
    </div>
    <div class="input-container">
      <label for="url">URL</label> <br />
      <input type="text" name="url" placeholder="Digite sua URL" />
    </div>
    <button type="submit" name="enviar">Enviar</button>
  </form>

  <script type="text/javascript">
  
    document.addEventListener("DOMContentLoaded", function () {
      let closeRight = document.querySelector('.close-right');
      let rightElement = document.querySelector('.right');
      let closeWrong = document.querySelector('.close-wrong');
      let wrongElement = document.querySelector('.wrong');

      closeRight.addEventListener('click', () => {
        rightElement.remove();
      });

      closeWrong.addEventListener('click', () => {
        wrongElement.remove();
      });
    });

  </script>

</body>
</html>