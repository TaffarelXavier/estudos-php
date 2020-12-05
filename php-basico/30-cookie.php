<?php

  setcookie('user', 'Rafael Diehl', time() + 3600);
  setcookie('email', 'rafaeljuliani1984@gmail.com', time() - 3600);
  setcookie('ultima_pesquisa', 'Tênis Adidas', time() + 3600);

  echo "Valores armazenados na superglobal \$_COOKIE: ";
  foreach($_COOKIE as $cookie) {
    echo "<li>$cookie</li>";
  }