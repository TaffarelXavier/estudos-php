<h3>Lista de produtos</h3>
<ul>
  <?php

    foreach($produtoDao->read($config['database']) as $produto) {
      echo "<li><b id=\"" . $produto['id'] . "\">" . $produto['nome'] . "</b> (" . $produto['descricao'] . ") <a href=\"editar.php?id=" . $produto['id'] ."\">Editar</a> <a href=\"index.php?id=" . $produto['id'] . "\" onClick=\"return confirm(`Deseja mesmo excluir \${document.getElementById('" . $produto['id'] . "').innerHTML}?`)\">Excluir</a></li>";
    }

  ?>
</ul>