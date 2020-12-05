<?php

  $senha = "123456";
  echo "Senha: $senha";

  echo "<hr />";

  echo "base64: " . base64_encode($senha) . "<br />";
  echo "MD5: " . md5($senha) . "<br />";
  echo "Sha1: " . sha1($senha);

  echo "<hr />";

  $options = ['cost' => 10];
  $senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
  echo "Hash: $senhaSegura";

  echo "<hr />";

  $senha_db = "$2y$10\$rmqWXCKJ2W3pC7fjUTdOtejD1yucN2toswr5l/Jqm0m6wECnC0wRq";

  if(password_verify($senha, $senha_db)) {
    echo "Senha válida";
  } else {
    echo "Senha inválida";
  }