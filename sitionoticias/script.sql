CREATE TABLE `db_noticias`.`noticias`
( `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(255) NOT NULL ,
  `contenido` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
INSERT INTO `noticias`(`id`, `titulo`, `contenido`) VALUES
 (null,'Primera Noticia','Contenido de la primera noticia'),
  (null,'Segunda Noticia','Contenido de la segunda noticia');
