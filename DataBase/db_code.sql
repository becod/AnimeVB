-----------------------------------
--- CREATING INFORMATION TABLE  ---
-----------------------------------
CREATE TABLE information (
	`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `lastname` VARCHAR(50) NOT NULL,
    `lastname` VARCHAR(50) NOT NULL,
    `user` VARCHAR(15) NOT NULL UNIQUE,
    `password` VARCHAR(15) NOT NULL,
    `email` VARCHAR(50)
);

INSERT INTO `information`(`name`, `lastname`, `user`, `password`, `email`) VALUES ('Benjamin','Valencia','ben_valencia','admin','benyamin.ak@hotmail.com');

----------------------------
--- CREATING USER TABLE  ---
----------------------------
CREATE TABLE `user` (
	`id` INT NOT NULL PRIMARY KEY,
    `user` VARCHAR(15) NOT NULL,
    `password` VARCHAR(15) NOT NULL,
    FOREIGN KEY (id) REFERENCES information(id)
);

----------------------------
--- CREATING USER TABLE  ---
----------------------------
CREATE TABLE `anime` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(10) NOT NULL UNIQUE,
    `about` VARCHAR(500) NOT NULL,
    `img_url` VARCHAR(100) NOT NULL UNIQUE,
    `user` VARCHAR(15),
    FOREIGN KEY (user) REFERENCE user(user)
);

---------------------------------
--- CREATING ANIMEINFO TABLE  ---
---------------------------------
CREATE TABLE `animeinfo`(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(50) NOT NULL,
    `about` varchar(500) NOT NULL,
    `img` varchar(50) NOT NULL,
    `id_user` INT NOT NULL,
    FOREIGN KEY (`id_user`) REFERENCES information(`id`)
);

-----------------------------------------------------------------------
--- Trigger to introduce the user from infromation into user table  ---
-----------------------------------------------------------------------

DELIMITER ;;
CREATE TRIGGER `insert_user` AFTER INSERT ON `information`
 FOR EACH ROW BEGIN
INSERT INTO `user` (user.id, user.user, user.password)
VALUES (new.id, new.user, new.password);
END
;;
DELIMITER ;

DELIMITER ;;
CREATE TRIGGER `update_user` AFTER UPDATE ON `information`
FOR EACH ROW BEGIN
BEGIN
UPDATE `user` SET user.user = new.user,user.password = new.password where user.id like new.id;
END
;;
DELIMITER ;

DELIMITER ;;
CREATE TRIGGER `insert_id_user` AFTER INSERT ON `animeinfo`
 FOR EACH ROW BEGIN
INSERT INTO `animeinfo` (animeinfo.id_user)
VALUES (new.id);
END
;;
DELIMITER ;