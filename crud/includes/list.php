<h3>Lista de produtos</h3>
<ul>
  <?php

    foreach($produtoDao->read($config['database']) as $produto) {
      echo "<li><b>" . $produto['nome'] . "</b> (" . $produto['descricao'] . ") <a href=\"editar.php?id=" . $produto['id'] ."\">Editar</a> <a href=\"\">Excluir</a></li>";
    }

  ?>
</ul>