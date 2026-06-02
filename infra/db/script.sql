-- Cria o banco e da o nome
CREATE DATABASE sistema_simples;

-- Usa o banco
USE sistema_simples;

-- Cria tabela de usuario
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
-- adiciona os usuarios e senhas dentro do banco de dados
INSERT INTO users (username, password) VALUES ('admin', '123');