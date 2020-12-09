<?php

  class Newsletter {
    
    public function cadastrarEmail($email) {

      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Este e-mail é inválido", 121);
      } else {
        echo "E-mail cadastrado com sucesso!";
      }
    }
  }

  $newsletter = new Newsletter();

  try {
    $newsletter->cadastrarEmail("contato@");
  } catch (Exception $e) {
    echo "Mensagem: " . $e->getMessage() . "<br />";
    echo "Código: " . $e->getCode() . "<br />";
    echo "Arquivo: " . $e->getFile() . "<br />";
    echo "Linha: " . $e->getLine() . "<br />";
  }