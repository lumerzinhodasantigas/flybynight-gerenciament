# Comandos usados para o projeto Microblog

## Modelagem Conceitual

```sql
CREATE DATABASE microblog_kennedy CHARACTER SET utf8mb4;
```

```sql
CREATE TABLE usuarios(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_usuario VARCHAR(100) NOT NULL,
    tipo ENUM('admin','editor') NOT NULL,
    senha VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL
);
```

```sql
CREATE TABLE noticias (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(100) NOT NULL,
    data DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    texto TEXT NOT NULL,
    imagem VARCHAR(100) NOT NULL,
    resumo TEXT NOT NULL,
    usuario_id INT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
```