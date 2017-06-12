-----------------------------------
--- CREATING INFORMATION TABLE  ---
-----------------------------------
CREATE TABLE information (
	`id` BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `lastname` VARCHAR(50) NOT NULL,
    `user` VARCHAR(15) NOT NULL UNIQUE,
    `password` VARCHAR(15) NOT NULL,
    `email` VARCHAR(50)
);

INSERT INTO `information`(`name`, `lastname`, `user`, `password`, `email`) VALUES ('Benjamin','Valencia','ben_valencia','admin','benyamin.ak@hotmail.com');

---------------------------------
--- CREATING ANIMEINFO TABLE  ---
---------------------------------
CREATE TABLE `animeinfo`(
    `id` BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL,
    `about` varchar(1000) NOT NULL,
    `type` varchar(50),
    `img` varchar(250) NOT NULL,
    `id_user` INT NOT NULL,
    FOREIGN KEY (`id_user`) REFERENCES information(`id`)
);

-----------------------------------------------------------------------
--- Trigger to introduce the user from infromation into user table  ---
-----------------------------------------------------------------------
DELIMITER ;;
CREATE TRIGGER `insert_id_user` AFTER INSERT ON `animeinfo`
 FOR EACH ROW BEGIN
INSERT INTO `animeinfo` (animeinfo.id_user)
VALUES (new.id);
END
;;
DELIMITER ;