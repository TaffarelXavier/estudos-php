<?php

  $arquivo = './arquivo.txt';
  $conteudo = "Contéudo de teste\r\n";

  $tamanhoArquivo = filesize($arquivo);

  $arquivoAberto = fopen($arquivo, 'r+');
  fwrite($arquivoAberto, $conteudo);

  while(!feof($arquivoAberto)) {
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo "$linha <br />";
  }

  fclose($arquivoAberto);
