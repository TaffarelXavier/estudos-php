<?php

  namespace App\Model;

  class Conexao {
    private static $instance;

    public static function getConn($config) {

      if(!isset(self::$instance)) {
        self::$instance = new \PDO(
          'mysql:host=localhost; dbname=pdo; charset=utf8',
          $config['username'],
          $config['password']
        );
      }
      
      return self::$instance;
    }
  }