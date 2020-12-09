<?php

  class Animal {

    public function Andar() {
      echo "O animal andou!";
    }

    public function Rastejar() {
      echo "O animal rastejou!";
    }
  }

  class Cobra extends Animal {
    
    public function Andar() {
      $this->Rastejar();
    }
  }

  $animal = new Cobra();
  $animal->Andar();