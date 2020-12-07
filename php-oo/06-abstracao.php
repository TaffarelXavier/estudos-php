<?php

  abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s) {
      $this->saldo = $s;
    }

    public function getSaldo() {
      return $this->saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
    abstract protected function Saldo($sa, $o);
  }

  class Itau extends Banco {
    
    public function Saldo($sa, $o) {
      echo "<hr /> Saldo atual: " . $this->saldo . " ($sa $o)";
    }

    public function Sacar($s) {
      $this->saldo -= $s;
      echo "<br /> Sacou: " . $s . $this->Saldo($this->saldo + $s, "- $s");
    }

    public function Depositar($d) {
      $this->saldo += $d;
      echo "<br /> Depositou: " . $d . $this->Saldo($this->saldo - $d, "+ $d");
    }
  }

  $itau = new Itau();
  $itau->setSaldo(1000);
  $itau->Sacar(350);
  $itau->Depositar(900);