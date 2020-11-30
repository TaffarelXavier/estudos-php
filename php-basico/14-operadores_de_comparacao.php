<?php

  if(10 == 10) { // Igual
    echo "Positivo";
  } else {
    echo "Negativo";
  }

  echo "<hr />";

  if(10 != 10) { // Diferente
    echo "Positivo";
  } else {
    echo "Negativo";
  }

  echo "<hr />";

  if(10 === "10") { // Estritamente igual
    echo "Positivo";
  } else {
    echo "Negativo";
  }

  echo "<hr />";

  if(10 !== "10") { // Estritamente diferente
    echo "Positivo";
  } else {
    echo "Negativo";
  }

  echo "<hr />";

  if(10 <> 10) { // Diferente alternativo
    echo "Positivo";
  } else {
    echo "Negativo";
  }

  echo "<hr />";

  if(10 < 100) { // Menor
    echo "Positivo";
  } else {
    echo "Negativo";
  }

  echo "<hr />";

  if(10 > 100) { // Maior
    echo "Positivo";
  } else {
    echo "Negativo";
  }

  echo "<hr />";

  if(10 >= 1) { // Maior ou igual
    echo "Positivo";
  } else {
    echo "Negativo";
  }

  echo "<hr />";

  if(10 <= 11) { // Menor ou igual
    echo "Positivo";
  } else {
    echo "Negativo";
  }

  echo "<hr />";

  echo 10 <=> 100; // "Spaceship", retorna 0 se for igual, se o lado esquerdo for menor retorna -1, se o lado esquerdo for maior retorna 1
