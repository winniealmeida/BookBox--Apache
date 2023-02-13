CREATE TABLE categorias
(
  id_categoria INTEGER NOT NULL AUTO_INCREMENT,
  nome_categoria VARCHAR(255) NOT NULL,
  PRIMARY KEY (id_categoria)
);

CREATE TABLE livros
(
  id_livro INTEGER NOT NULL AUTO_INCREMENT,
  nome_livro VARCHAR(45) NOT NULL,
  editora_livro VARCHAR(255) NOT NULL,
  autor_livro VARCHAR(255) NOT NULL,
  resenha_livro VARCHAR(255) NOT NULL,
  id_categoria INTEGER NOT NULL,
  PRIMARY KEY (id_livro),
  FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
);
