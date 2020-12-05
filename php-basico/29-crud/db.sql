CREATE DATABASE IF NOT EXISTS crud;
ALTER DATABASE crud CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE crud;

CREATE TABLE IF NOT EXISTS clientes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  sobrenome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  idade INT(3) NOT NULL
);

ALTER TABLE clientes MODIFY
    nome VARCHAR(255)
      CHARACTER SET utf8
      COLLATE utf8_unicode_ci;
      
ALTER TABLE clientes MODIFY
     sobrenome VARCHAR(255)
      CHARACTER SET utf8
      COLLATE utf8_unicode_ci;
      
ALTER TABLE clientes MODIFY
     email VARCHAR(255)
      CHARACTER SET utf8
      COLLATE utf8_unicode_ci;