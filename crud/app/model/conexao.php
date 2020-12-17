<?php

  namespace app\model;

  require_once('senha.php');

  class Conexao {
    private static $instance;

    public static function getConn() {
      if(!isset(self::$instance)) {
        self::$instance = new PDO(
          'mysql:host=localhost; dbname=pdo; charset=utf8',
          'root',
          $GLOBALS['senha']
          // Apague a linha acima e descomente a linha abaixo
          // ''
        );
      }
      
      return self::$instance;
    }
  }