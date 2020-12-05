USE sistemalogin;

CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  login VARCHAR(255) NOT NULL,
  senha VARCHAR(32) NOT NULL
);

INSERT INTO usuarios (nome, login, senha)
VALUES ('Rafael Diehl', 'admin', MD5('123456'));