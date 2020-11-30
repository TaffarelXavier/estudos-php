<?php

  $idade = 17;
  $nome = "Rafael";

  $idade = 18;

  if(($idade == 17) && ($nome == "Rafael")) { // É verdadeiro se os DOIS forem verdadeiros
    echo "É verdadeiro";
  } else {
    echo "É falso";
  }

  echo "<hr />";

  if(($idade == 17) || ($nome == "Rafael")) { // É verdadeiro se um ou dois forem verdadeiros
    echo "É verdadeiro";
  } else {
    echo "É falso";
  }

  echo "<hr />";

  $idade = 17;

  if(($idade == 17) xor ($nome == "Rafael")) { // É verdadeiro se apenas UM for verdadeiro
    echo "É verdadeiro";
  } else {
    echo "É falso";
  }

  echo "<hr />";

  if(!($idade == 18) && ($nome == "Rafael")) {
    echo "É verdadeiro";
  } else {
    echo "É falso";
  }


  
