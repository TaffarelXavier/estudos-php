Instale as dependências
```
composer install
```

Crie um banco de dados e insira a seguinte tabela
```sql
CREATE TABLE `produtos` (
  `id` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `produtos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;
```

Crie um arquivo `config.php`, com as informações necessárias:
```php
<?php

  return [
    'database' => [
      'name' => 'nome_do_banco',
      'username' => 'nome_do_usuario', // root
      'password' => 'sua_senha' // ''
    ]
  ];
```