<?php

  $servername = "localhost";
  $username = "root";
  include_once "password.php";
  // Tire o comentário abaixo e insira sua senha;
  // $password = "";
  $db_name = "crud";

  $connect = mysqli_connect($servername, $username, $password, $db_name);
  mysqli_set_charset($connect, "utf8");

  if(mysqli_connect_error()) {
    echo "Erro na conexão: " . mysqli_connect_error();
  }