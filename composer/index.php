<?php

  require_once 'vendor/autoload.php';

  use Cocur\Slugify\Slugify;

  $slugify = new Slugify();
  $slugify->addRule('ão', 'funcionou');
  echo $slugify->slugify('Olá mundo! ão', '_');