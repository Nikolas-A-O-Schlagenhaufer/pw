CREATE DATABASE AULA_18_09;
USE AULA_18_09;

CREATE TABLE USER(
	id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(50) NOT NULL,
  senha VARCHAR(50) NOT NULL
);

SELECT * FROM USER;