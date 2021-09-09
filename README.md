<div align="center" width="200">
  <h1>Estudos de PHP</h1>
  <p>Repositório dedicado a estudos de PHP, do básico à orientação a objetos. <br />
  <img src="https://refactoring.guru/images/patterns/languages/php.png" width="600" />
</div>

__Remover html de uma string:__
```php
$input = "<blink><strong>Hello!</strong></blink>";
$a = strip_tags($input);
$b = strip_tags($input, "<strong><em>");
// Saída para $a: Hello!
// Saída para $b: <strong>Hello!</strong>
```

__Formatando um número com zeros à esquerda em PHP__
```php
echo sprintf('%08d', 1234);
// Saída: 00001234
```

__Retorna uma parte de uma string__
```php
$string = "Ferramenta para programação";
echo substr($string,0,10);
// Saída: Ferramenta
```

## CRUD Codeigniter 3
```php
<?php

  class Blog_model extends CI_Model {

      private $table = 'tblcentral_notificacoes';
      public static $fillable = ['id', 'assunto', 'message', 'mail_or_sms', 'cargos'];

      public function getAll() {
          return $this->db->get($this->table)->result();
      }

      public function insert($data) {
          $this->db->insert($this->table, $data);
          return $this->db->insert_id();
      }

      public function findById($id) {
          $this->db->where('id', $id);
          return $this->db->get($this->table)->result();
      }

      public function update($id, $data) {
          $this->db->where('id', $id);
          $this->db->update($this->table, $data);
          // OU $this->db->update($this->table, $data, array('id' => $id));
          return true;
      }

      public function delete($id) {
          $this->db->where('id', $id);
          $this->db->delete($this->table);
          return true;
      }

  }
  
```

```php
echo PHP_EOL
// Saída: \r\n
```

### PHP Convert cents to dollars (Converter centavos para dólares)

https://stackoverflow.com/questions/30713928/php-convert-cents-to-dollars/30714110
```php
// Entrada:
050
1000
1250
2999

// Saída desejada:
0.50
10.00
12.50
29.99

$value = 2999;

echo number_format(($value /100), 2, '.', ' ');

// Saída: 29.99
```
