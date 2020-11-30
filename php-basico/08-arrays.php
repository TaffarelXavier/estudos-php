<?php

  $classes = array(1 => "Guerreiro", 2 => "Mago", 3 => "Ladino");
  $classes[] = "Clérigo";
  $classes[10] = "Bardo";
  print_r($classes);

  echo "<hr />";

  echo $classes[3];

  echo "<hr />";

  $npc = array();
  $npc["raça"] = "Anão";
  $npc["classe"] = $classes[4];
  $npc["alinhamento"] = "Leal e Bom";

  print_r($npc);

  echo "<br />";

  $equipamento = ["arma" => "Martelo", "armadura" => "Cota de Malha", "escudo" => "Escudo de Madeira"];

  print_r($equipamento);

  echo "<hr />";

  echo "Raça: " . $npc['raça'] . "<br />";
  echo "Classe: " . $npc['classe'] . "<br />";
  echo "Alinhamento: " . $npc['alinhamento'] . "<br />";

  echo "Equipamento: <ul>";

  foreach($equipamento as $item) {
      echo "<li>$item</li>";
  }

  echo "</ul> <hr />";

  echo "Número de classes disponíveis: " . count($classes) . "<br />";
  $itens = count($equipamento);
  echo "Número de itens: $itens";

  echo "<hr />";

  $raças = array(
      "Anão" => array("Anão da Montanha", "Anão da Colina", "Duergar"),
      "Elfo" => array("Elfo da Floresta", "Alto Elfo", "Drow"),
      "Halfling" => array("Halfling Pés-leves", "Halfling Robusto"),
  );

  $i = 0;
  foreach($raças as $raça) {
    $chave = array_keys($raças);
    echo $chave[$GLOBALS['i']] . "<ul>";
    foreach($raça as $subraça) {
      echo "<li>$subraça</li>";
    }
    echo "</ul>";
    $GLOBALS['i']++;
  }

  echo "<hr />";

  $conjuradores = ["Carisma" => "Feiticeiro", "Sabedoria" => "Druida", "Inteligência" => "Mago"];

  echo "Conjuradores <ul>";
  foreach($conjuradores as $atributo => $classe) {
    echo "<li>$classe (Atributo de conjuração: $atributo)</li>";
  }
  echo "</ul>";