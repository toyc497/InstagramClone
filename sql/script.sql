CREATE DATABASE IF NOT EXISTS `instagram`;

CREATE TABLE `instagram`.`user` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(100),
    `senha` VARCHAR(40),
    PRIMARY KEY (id)
);