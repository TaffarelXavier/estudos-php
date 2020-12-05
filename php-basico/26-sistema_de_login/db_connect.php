<?php

  include 'password.php';

  $servername = "localhost";
  $username = "root";
  $db_name = "sistemalogin";
  // $password = "";

  $connect = mysqli_connect($servername, $username, $password, $db_name);

  if(mysqli_connect_error()) {
    echo "Falha ao conectar: " . mysqli_connect_error();
  }