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
      height: 360px;
      display: flex;
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
      font-size: 1rem;
      padding: 0.7rem;
      background: #eae9ec;
      margin-top: 10px;
      min-width: 270px;
      width: 350px;
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
  </style>
</head>
<body>
  
  <form action="dados.php" method="GET">
    <h3>Formulário</h3>
    <div class="input-container">
      <label for="nome">Nome</label> <br />
      <input type="text" name="nome" placeholder="Digite seu nome" />
    </div>
    <div class="input-container">
      <label for="email">E-mail</label> <br />
      <input type="email" name="email" placeholder="Digite seu e-mail" />
    </div>
    <button type="submit">Enviar</button>
  </form> 

</body>
</html>