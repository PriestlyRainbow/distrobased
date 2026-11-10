CREATE DATABASE IF NOT EXISTS meusite CHARACTER SET utf8mb4;
USE meusite;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL UNIQUE,          -- nome da distro
    senha VARCHAR(255) NOT NULL,
    data_lancamento DATE NOT NULL,
    gerenciador_sistemas VARCHAR(50) NOT NULL,  -- systemd, OpenRC, runit...
    ambiente_desktop VARCHAR(100) NOT NULL,
    arquiteturas VARCHAR(100) NOT NULL,         -- ex: x86_64, ARM64
    recomendacao_uso TEXT NOT NULL,
    requisitos_hardware TEXT NOT NULL,
    nivel_dificuldade ENUM('Iniciante','Intermediário','Avançado') NOT NULL
);