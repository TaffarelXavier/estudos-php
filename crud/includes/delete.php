<?php

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM produtos WHERE id = $id";

    $produtoDao->delete($id, $config['database']);
  }