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

    echo "</ul>";