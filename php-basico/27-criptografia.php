<?php

  $senha = "love";
  echo "Senha: $senha";

  echo "<hr />";

  echo "base64: " . base64_encode($senha) . "<br />";
  echo "MD5: " . md5($senha) . "<br />";
  echo "Sha1: " . sha1($senha);