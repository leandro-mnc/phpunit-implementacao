CREATE TABLE Pessoa (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(50) NOT NULL,
    `cpf` CHAR(14) NOT NULL,
    `rg` CHAR(9) NOT NULL,
    `dataDeNascimento` DATE NOT NULL
) Engine=InnoDB collate=utf8mb4 charset=utf8mb4_general_ci;

INSERT INTO Pessoa (id, nome, cpf, rg, dataDeNascimento) VALUES(1, 'Maria da Silva', '12345678901', '123456789', '2000-01-01');