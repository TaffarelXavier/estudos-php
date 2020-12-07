<?php

  class Admin {
    const nome = "Rafael";

    public function exibirNome() {
      echo self::nome;
    }
  }

  $admin = new Admin();
  $admin->exibirNome();

  echo "<br />";

  class Rafael extends Admin {
    const nome = " Diehl";

    public function exibirNome() {
      echo parent::nome . self::nome;
    }
  }

  $rafael = new Rafael();
  $rafael->exibirNome();