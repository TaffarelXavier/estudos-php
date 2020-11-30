<?php

    $nome = "Rafael Diehl";

    function exibeNome() {
        global $nome;
        echo $nome;
    }

    exibeNome();

    echo "<hr />";

    function exibeCidade() {
        global $cidade;
        $cidade = "Cerquilho";
    }

    exibeCidade();
    echo $cidade;

    echo "<hr />";

    $a = 1;
    $b = 2;
    $c = 3;

    function soma() {
        echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    }

    soma();