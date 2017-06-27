-----------------------------------
--- CREATING INFORMATION TABLE  ---
-----------------------------------
CREATE TABLE avb_users (
	`ID` BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user_name` VARCHAR(50) NOT NULL,
    `user_lastname` VARCHAR(50) NOT NULL,
    `user_gender` VARCHAR(50),
    `user_datebirth` DATE,
    `user_about` TEXT(255),
    `user_img` VARCHAR(50),
    `user_login` VARCHAR(15) NOT NULL UNIQUE,
    `user_password` VARCHAR(50) NOT NULL,
    `user_email` VARCHAR(100) NOT NULL UNIQUE,
    `user_status` INT(1) DEFAULT 0
) ENGINE = InnoDB DEFAULT CHARSET = UTF8

INSERT INTO `information`(`name`, `lastname`, `user`, `password`, `email`) VALUES ('Benjamin','Valencia','ben_valencia','admin','benyamin.ak@hotmail.com');

---------------------------------
--- CREATING ANIMEINFO TABLE  ---
---------------------------------
CREATE TABLE `avb_posts`(
    `ID` BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `post_title` TEXT NOT NULL,
    `post_content` TEXT NOT NULL,
    `post_type` varchar(50) ,
    `post_img` varchar(255) NOT NULL,
    `post_author` BIGINT NOT NULL,
    FOREIGN KEY (`post_author`) REFERENCES avb_users(`ID`)
) ENGINE = InnoDB DEFAULT CHARSET = UTF8;

-----------------------------------------------------------------------
--- Trigger to introduce the user from infromation into user table  ---
-----------------------------------------------------------------------
DELIMITER ;;
CREATE TRIGGER `insert_author` AFTER INSERT ON `avb_posts`
 FOR EACH ROW BEGIN
INSERT INTO `avb_posts` (animeinfo.post_author)
VALUES (new.ID);
END
;;
DELIMITER ;