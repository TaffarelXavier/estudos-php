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
//Saída: 00001234
```
