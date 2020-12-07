<?php

  /*
  *  public - Fará com que não haja ocultação nenhuma.
  *  Toda propriedade ou método declarado com "public" é acessível por todos que quiserem *  acessá-los.
  *  
  *  protected - Visibilidade "protected" faz com que todos os herdeiros vejam as propriedades ou métodos como se fossem públicos.
  *  
  *  private - Ao contrário do "public", esse modificador faz com que qualquer método ou *  propriedade seja acessível só e somente só pela classe que a declarou.
  */

  class Veiculo {
    private $modelo;
    protected $cor;
    public $ano;

    protected function Andar() {
      echo "Andou";
    }

    private function Parar() {
      echo "Parou";
    }
  }

  class Carro extends Veiculo {

    public function ligarLimpador() {
      echo "Limpando em 3...2...1...";
    }

    public function setModelo($m) {
      $this->modelo = $m;
    }

    public function getModelo() {
      echo $this->modelo;
    }

    public function setCor($c) {
      $this->cor = $c;
    }

    public function getCor() {
      echo $this->cor;
    }

    public function permitirAndar() {
      $this->Andar();
    }

    public function permitirParar() {
      $this->Parar();
    }
  }

  $carro = new Carro();
  $carro->setModelo("Gol");
  $carro->getModelo();

  echo "<br />";

  $carro->setCor("Vermelho");
  $carro->getCor();

  echo "<br />";

  var_dump($carro);

  echo "<Hr />";

  $carro->permitirAndar();
  $carro->permitirParar();