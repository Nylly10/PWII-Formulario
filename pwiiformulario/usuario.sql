CREATE DATABASE Usuario;

use usuario;

CREATE TABLE Usuario (
    id INT AUTO_INCREMENT PRIMARY  KEY,
    nome VARCHAR (50),
    email VARCHAR (100),
    senha VARCHAR (32)
)